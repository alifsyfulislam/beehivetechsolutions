<?php


namespace App\Repositories;


use App\Http\Traits\QueryTrait;
use App\Models\Client;

class ClientRepository
{

    use QueryTrait;

    public function listing($request)
    {
        $query = new Client();

        if ($request->filled('query')){
            $likeFilterList         = ['title'];
            $whereFilterList        = ['title'];
            $query = self::filterTask($request, $query, $whereFilterList, $likeFilterList);
        }

        return $query->with('user','media')->orderBy('created_at','DESC')->paginate(15);
    }

    public function create(array $data)
    {
        $dataObj                    = new Client();
        $dataObj->id                = $data['id'];
        $dataObj->first_name        = $data['first_name'];
        $dataObj->middle_name       = $data['middle_name'];
        $dataObj->last_name         = $data['last_name'];
        $dataObj->slug              = $data['slug'];
        $dataObj->type              = $data['type'];
        $dataObj->user_id           = $data['user_id'];
        $dataObj->details           = $data['details'];
        $dataObj->status            = $data['status'];
        $dataObj->email             = $data['email'];
        return $dataObj->save();
    }

    public function show($id)
    {
        if (!empty($id)){
            return Client::with('user','media')->findorfail($id);
        }else{
            return Client::with('user','media')->orderBy('created_at','DESC')->take(1)->get();
        }

    }

    public function update(array $data, $id)
    {

        $dataObj                    = Client::with('user')->findorfail($id);
        $dataObj->first_name        = $data['first_name'];
        $dataObj->middle_name       = $data['middle_name'];
        $dataObj->last_name         = $data['last_name'];
        $dataObj->slug              = $data['slug'];
        $dataObj->type              = $data['type'];
        $dataObj->user_id           = $data['user_id'];
        $dataObj->details           = $data['details'];
        $dataObj->status            = $data['status'];
        $dataObj->email             = $data['email'];
        $dataObj->save();
        return $dataObj;
    }

    public function delete($id)
    {

        $dataObj                      = Client::with('user','media')->findorfail($id);

        if (!empty($dataObj->media->url)){
            $fileName          = basename(parse_url($dataObj->media->url, PHP_URL_PATH));
            unlink('uploads/avatar/'.$fileName);
            $dataObj->delete();
        }
    }

}