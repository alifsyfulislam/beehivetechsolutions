<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['id','name','email','phone','message','status'];

    public function getMessageAttribute($value)
    {
        if (is_null($value)) {

            return $value;

        }

        return Crypt::decryptString($value);
    }

    public function getCreatedAtAttribute($date)
    {
        return date('j M, Y', strtotime($date));
    }

    public function getUpdatedAtAttribute($date)
    {
        return date('j M, Y', strtotime($date));
    }
}
