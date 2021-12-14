<?php


namespace App\Services;


use App\Helpers\Helper;
use App\Models\Media;
use App\Repositories\BannerRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class BannerService
{
    protected $repository;

    public function __construct(BannerRepository $repository)
    {

        $this->repository            = $repository;

    }

    public function listItems($request)
    {

        DB::beginTransaction();

        try{

            $collections             = $this->repository->listing($request);

        }catch (Exception $e) {

            DB::rollBack();
            Log::error('Found Exception: ' . $e->getMessage() . ' [Script: ' . __CLASS__ . '@' . __FUNCTION__ . '] [Origin: ' . $e->getFile() . '-' . $e->getLine() . ']');

            return response()->json([
                'status'             => 424,
                'messages'           => config('status.status_code.424'),
                'error'              => $e->getMessage()
            ]);
        }

        DB::commit();

        return response()->json([
            'status'                 => 200,
            'messages'               => config('status.status_code.200'),
            'collections'            => $collections
        ]);
    }

    public function createItem($request)
    {

        $validator = Validator::make($request->all(),[

            'title'                  => 'required|string|min:3|max:100|unique:banners',
            'media'                  => 'mimes:jpeg,jpg,png,gif,mp4,mov,ogg|required|max:30000',
            'user_id'                => 'required'

        ],[
            'title.required'         => 'title required',
            'title.string'           => 'title must be string',
            'title.min'              => 'title minimum length 3',
            'title.max'              => 'title maximum length 20',
            'title.unique'           => 'title already taken',
            'media.required'         => 'media required',
            'media.max'              => 'media maximum size 30MB',
            'user_id'                => 'user id is required'
        ]);

        if($validator->fails()) {

            return response()->json([
                'status_code'       => 400,
                'messages'          => config('status.status_code.400'),
                'errors'            => $validator->errors()->all()
            ]);

        }


        $input                      = $request->all();
        $input['id']                = Helper::idGenarator();
        $input['slug']              = Helper::slugify($input['title']);

        DB::beginTransaction();

        try {

            $this->repository->create($input);
            $info                   = $this->repository->show($input['id'] ? $input['id'] : '');

            if($request->hasFile('media')) {

                $imageUrl           = Helper::base64BannerStore("uploads/banner/", $request->media);

//                dd($imageUrl);

                $info->media()->create([

                    'url'           => $imageUrl

                ]);
                $info                   = $this->repository->show($input['id']? $input['id'] : '');
            }



        } catch (Exception $e) {

            DB::rollBack();
            Log::error('Found Exception: ' . $e->getMessage() . ' [Script: ' . __CLASS__ . '@' . __FUNCTION__ . '] [Origin: ' . $e->getFile() . '-' . $e->getLine() . ']');

            return response()->json([
                'status_code'       => 424,
                'messages'          => config('status.status_code.424'),
                'error'             => $e->getMessage()
            ]);
        }

        DB::commit();

        return response()->json([
            'status_code'           => 201,
            'messages'              => config('status.status_code.200'),
            'info'                  => $info
        ]);
    }


    public function showItem($id)
    {

        DB::beginTransaction();

        try{

            $info                   = $this->repository->show($id);

        }catch (Exception $e) {

            DB::rollBack();
            Log::error('Found Exception: ' . $e->getMessage() . ' [Script: ' . __CLASS__ . '@' . __FUNCTION__ . '] [Origin: ' . $e->getFile() . '-' . $e->getLine() . ']');

            return response()->json([
                'status'            => 424,
                'messages'          => config('status.status_code.424'),
                'error'             => $e->getMessage()
            ]);
        }

        DB::commit();

        return response()->json([
            'status'                => 200,
            'message'               => config('status.status_code.200'),
            'info'                  => $info
        ]);
    }

    public function updateItem($request,$id)
    {
        $validator = Validator::make($request->all(),[
            'title'                  => "required|string|min:3|max:20|unique:banners,title,$id,id",
            'media'                  => 'mimes:jpeg,jpg,png,gif,mp4,mov,ogg|nullable|max:30000',
            'user_id'                => 'required'
        ],[
            'title.required'         => 'title required',
            'title.string'           => 'title must be string',
            'title.min'              => 'title minimum length 3',
            'title.max'              => 'title maximum length 20',
            'title.unique'           => 'title already taken',
            'media.max'              => 'media maximum size 30MB',
            'user_id'                => 'user id is required'
        ]);

        if($validator->fails()) {

            return response()->json([
                'status_code'       => 400,
                'messages'          => config('status.status_code.400'),
                'errors'            => $validator->errors()->all()
            ]);

        }

        $input                      = $request->all();
        $input['slug']              = Helper::slugify($input['title']);


        DB::beginTransaction();

        try {

            $this->repository->update($input, $id);
            $info                   = $this->repository->show($id);

            if($request->hasFile('media')) {

                $dataObj = Media::findorfail($info->media->id);

                if (!empty($dataObj->url)){
                    $fileName          = basename(parse_url($dataObj->url, PHP_URL_PATH));
                    if (!empty($fileName)){
                        unlink('uploads/banner/'.$fileName);
                    }
                    $dataObj->delete();
                }

                $imageUrl           = Helper::base64BannerStore("uploads/banner/", $request->media);

                $info->media()->create([

                    'url'           => $imageUrl

                ]);
                $info                   = $this->repository->show($id);
            }


        } catch (Exception $e) {

            DB::rollBack();
            Log::error('Found Exception: ' . $e->getMessage() . ' [Script: ' . __CLASS__ . '@' . __FUNCTION__ . '] [Origin: ' . $e->getFile() . '-' . $e->getLine() . ']');

            return response()->json([
                'status_code'       => 424,
                'messages'          => config('status.status_code.424'),
                'error'             => $e->getMessage()
            ]);
        }

        DB::commit();

        return response()->json([
            'status_code'           => 200,
            'messages'              => config('status.status_code.200'),
            'info'                  => $info
        ]);

    }

    public function deleteItem($id)
    {
        DB::beginTransaction();

        try {

            $this->repository->delete($id);

        } catch (Exception $e) {

            DB::rollBack();

            Log::error('Found Exception: ' . $e->getMessage() . ' [Script: ' . __CLASS__ . '@' . __FUNCTION__ . '] [Origin: ' . $e->getFile() . '-' . $e->getLine() . ']');

            return response()->json([
                'status_code' => 424,
                'messages'=>config('status.status_code.424'),
                'error' => $e->getMessage()]);
        }

        DB::commit();

        return response()->json([
            'status_code' => 200,
            'messages'=>config('status.status_code.200')
        ]);
    }
}