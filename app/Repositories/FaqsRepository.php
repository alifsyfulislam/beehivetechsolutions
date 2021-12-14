<?php


namespace App\Repositories;


use App\Http\Traits\QueryTrait;
use App\Models\Faqs;

class FaqsRepository
{
    use QueryTrait;

    public function listing($request)
    {
        $query = new Faqs();

        if ($request->filled('query')){
            $likeFilterList         = ['title'];
            $whereFilterList        = ['title'];
            $query = self::filterTask($request, $query, $whereFilterList, $likeFilterList);
        }

        return $query->with('user')->orderBy('created_at','DESC')->paginate(15);
    }

    public function create(array $data)
    {
        $dataObj                    = new Faqs();
        $dataObj->id                = $data['id'];
        $dataObj->user_id           = $data['user_id'];
        $dataObj->title             = $data['title'];
        $dataObj->slug              = $data['slug'];
        $dataObj->details           = $data['details'];
        $dataObj->status            = $data['status'];
//        $dataObj->type              = $data['type'];
        return $dataObj->save();
    }

    public function show($id)
    {
        if (!empty($id)){
            return Faqs::with('user')->findorfail($id);
        }else{
            return Faqs::with('user')->orderBy('created_at','DESC')->take(1)->get();
        }

    }

    public function update(array $data, $id)
    {

        $dataObj                    = Faqs::with('user')->findorfail($id);
        $dataObj->user_id           = $data['user_id'];
        $dataObj->title             = $data['title'];
        $dataObj->slug              = $data['slug'];
        $dataObj->details           = $data['details'];
        $dataObj->status            = $data['status'];
//        $dataObj->type              = $data['type'];
        $dataObj->save();
        return $dataObj;
    }

    public function delete($id)
    {

        $dataObj                      = Faqs::with('user')->findorfail($id);

        if (!empty($dataObj->media->url)){
            $fileName          = basename(parse_url($dataObj->media->url, PHP_URL_PATH));
            unlink('uploads/banner/'.$fileName);
            $dataObj->delete();
        }
    }
}