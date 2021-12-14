<?php


namespace App\Repositories;


use App\Http\Traits\QueryTrait;
use App\Models\Team;

class TeamRepository
{
    use QueryTrait;

    public function listing($request)
    {
        $query = new Team();

        if ($request->filled('query')){
            $likeFilterList         = ['title'];
            $whereFilterList        = ['title'];
            $query = self::filterTask($request, $query, $whereFilterList, $likeFilterList);
        }

        return $query->with('user','media')->orderBy('created_at','DESC')->paginate(15);
    }

    public function create(array $data)
    {
        $dataObj                    = new Team();
        $dataObj->id                = $data['id'];
        $dataObj->user_id           = $data['user_id'];
        $dataObj->first_name        = $data['first_name'];
        $dataObj->middle_name       = $data['middle_name'];
        $dataObj->last_name         = $data['last_name'];
        $dataObj->slug              = $data['slug'];
        $dataObj->email             = $data['email'];
        $dataObj->designation       = $data['designation'];
        $dataObj->social_links      = $data['social_links'];
        $dataObj->details           = $data['details'];
        $dataObj->status            = $data['status'];
        return $dataObj->save();
    }

    public function show($id)
    {
        if (!empty($id)){
            return Team::with('user','media')->findorfail($id);
        }else{
            return Team::with('user','media')->orderBy('created_at','DESC')->take(1)->get();
        }

    }

    public function update(array $data, $id)
    {

        $dataObj                    = Team::with('user')->findorfail($id);
        $dataObj->first_name        = $data['first_name'];
        $dataObj->middle_name       = $data['middle_name'];
        $dataObj->last_name         = $data['last_name'];
        $dataObj->slug              = $data['slug'];
        $dataObj->email             = $data['email'];
        $dataObj->user_id           = $data['user_id'];
        $dataObj->designation       = $data['designation'];
        $dataObj->social_links      = $data['social_links'];
        $dataObj->details           = $data['details'];
        $dataObj->status            = $data['status'];
        $dataObj->save();
        return $dataObj;
    }

    public function delete($id)
    {

        $dataObj                      = Team::with('user','media')->findorfail($id);
//        $dataObj->delete();

        if (!empty($dataObj->media->url)){
            $fileName          = basename(parse_url($dataObj->media->url, PHP_URL_PATH));
            unlink('uploads/avatar/'.$fileName);
            $dataObj->delete();
        }
    }
}