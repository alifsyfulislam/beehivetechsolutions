<?php


namespace App\Repositories;


use App\Http\Traits\QueryTrait;
use App\Models\News;

class NewsRepository
{
    use QueryTrait;

    public function listing($request)
    {
        $query = new News();

        if ($request->filled('query')){
            $likeFilterList         = ['title'];
            $whereFilterList        = ['title'];
            $query = self::filterTask($request, $query, $whereFilterList, $likeFilterList);
        }

        return $query->with('user','media')->orderBy('created_at','DESC')->paginate(15);
    }

    public function create(array $data)
    {
        $dataObj                    = new News();
        $dataObj->id                = $data['id'];
        $dataObj->user_id           = $data['user_id'];
        $dataObj->title             = $data['title'];
        $dataObj->slug              = $data['slug'];
        $dataObj->details           = $data['details'];
        $dataObj->status            = $data['status'];
        return $dataObj->save();
    }

    public function show($id)
    {
        if (!empty($id)){
            return News::with('user','media')->findorfail($id);
        }else{
            return News::with('user','media')->orderBy('created_at','DESC')->take(1)->get();
        }

    }

    public function update(array $data, $id)
    {

        $dataObj                    = News::with('user')->findorfail($id);
        $dataObj->user_id           = $data['user_id'];
        $dataObj->title             = $data['title'];
        $dataObj->slug              = $data['slug'];
        $dataObj->details           = $data['details'];
        $dataObj->status            = $data['status'];
        $dataObj->save();
        return $dataObj;
    }

    public function delete($id)
    {

        $dataObj                      = News::with('user','media')->findorfail($id);

        if (!empty($dataObj->media->url)){
            $fileName          = basename(parse_url($dataObj->media->url, PHP_URL_PATH));
            unlink('uploads/banner/'.$fileName);
            $dataObj->delete();
        }
    }
}