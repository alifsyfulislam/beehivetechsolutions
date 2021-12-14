<?php


namespace App\Repositories;


use App\Models\Contact;
use Illuminate\Support\Facades\Crypt;

class ContactRepository
{
    public function create(array  $data)
    {
        $dataObj = new Contact;
        $dataObj->id        = $data['id'];
        $dataObj->name      = $data['name'];
        $dataObj->email     = $data['email'];
        $dataObj->phone     = $data['phone'];
        $dataObj->message   = Crypt::encryptString($data['message']);
        $dataObj->status    = $data['status'];
        return $dataObj->save();
    }


    public function show($id){
        $dataObj = Contact::findorfail($id);
        return $dataObj;
    }
}