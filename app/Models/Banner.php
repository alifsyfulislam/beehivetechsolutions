<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'slug', 'details', 'status'];

    public function media()
    {

        return $this->morphOne(Media::class, 'mediable');

    }

    public function user()
    {

        return $this->belongsTo(User::class,'user_id','id');

    }

    public function getCreatedAtAttribute($date)
    {

        return date('j M, Y', strtotime($date));

    }

    /**
     * @param $date
     * @return string
     */
    public function getUpdatedAtAttribute($date)
    {

        return date('j M, Y', strtotime($date));

    }

}
