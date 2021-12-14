<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'designation',
        'social_links',
        'status',
        'details',
        'first_name',
        'middle_name',
        'last_name',
        'slug',
        'email'
    ];

    public function user()
    {

        return $this->belongsTo(User::class,'user_id','id');

    }

    public function media()
    {

        return $this->morphOne(Media::class, 'mediable');

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
