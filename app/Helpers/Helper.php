<?php


namespace App\Helpers;


use Image;

class Helper
{
    public static function idGenarator()
    {
        return time().rand(1000,9000);
    }

    public static function slugify($value)
    {

        return strtolower(preg_replace("/[^a-zA-Z0-9]+/", "-", $value));

    }

    public static function nameSlugify($first_name,$middle_name,$last_name)
    {
        if (!empty($middle_name)){
            return strtolower(preg_replace("/[^a-zA-Z0-9]+/", "-", ($first_name.' '.$middle_name.' '.$last_name)));
        }else{
            return strtolower(preg_replace("/[^a-zA-Z0-9]+/", "-", ($first_name.' '.$last_name)));
        }
    }


    public static function base64AvatarImageStore($url, $image)
    {
        if (!file_exists(public_path($url))) {
            mkdir(public_path($url), 777, true);
        }
        $filename = date('Ymdhis')."-".strtolower(preg_replace("/[^a-zA-Z0-9.]+/", "-", $image->getClientOriginalName()));
        Image::make($image->getRealPath())->resize(200,200)->save($url.$filename);
        return url($url.$filename);
    }


    public static function base64BannerStore($url, $media)
    {
        if (!file_exists(public_path($url))) {
            mkdir(public_path($url), 777, true);
        }
        $filename = date('Ymdhis')."-".strtolower(preg_replace("/[^a-zA-Z0-9.]+/", "-", $media->getClientOriginalName()));
        Image::make($media->getRealPath())->save($url.$filename);
        return url($url.$filename);
    }

    public static function base64IconStore($url, $image)
    {
        if (!file_exists(public_path($url))) {
            mkdir(public_path($url), 777, true);
        }
        $filename = date('Ymdhis')."-".strtolower(preg_replace("/[^a-zA-Z0-9.]+/", "-", $image->getClientOriginalName()));
        Image::make($image->getRealPath())->resize(50,50)->save($url.$filename);
        return url($url.$filename);
    }
}