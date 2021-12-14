<?php


namespace App\Services;


use App\Helpers\Helper;
use App\Repositories\FaqsRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class FaqsService
{
    protected $repository;

    public function __construct(FaqsRepository $repository)
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

            'title'                  => 'required|string|min:2|max:200',
            'user_id'                => 'required'

        ],[
            'title.required'         => 'title required',
            'title.string'           => 'title must be string',
            'title.min'              => 'title minimum length 2',
            'title.max'              => 'title maximum length 200',
//            'media.required'         => 'media required',
//            'media.max'              => 'media maximum size 30MB',
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

//            if($request->hasFile('media')) {
//
//                $imageUrl           = Helper::base64BannerStore("uploads/banner/", $request->media);
//
//                $info->media()->create([
//
//                    'url'           => $imageUrl
//
//                ]);
//                $info               = $this->repository->show($input['id']? $input['id'] : '');
//            }



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
            'title'                  => "required|string|min:2|max:200",
//            'media'                  => 'mimes:jpeg,jpg,png,gif,mp4,mov,ogg|nullable|max:30000',
            'user_id'                => 'required'

        ],[
            'title.required'         => 'first name required',
            'title.string'           => 'first name must be string',
            'title.min'              => 'first name minimum length 2',
            'title.max'              => 'first name maximum length 200',
            'title.unique'           => 'title must be unique',
//            'media.required'         => 'media required',
//            'media.max'              => 'media maximum size 30MB',
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

//            if($request->hasFile('media')) {
//
//                $dataObj = Media::findorfail($info->media->id);
//                if (!empty($dataObj->url)){
//                    $fileName          = basename(parse_url($dataObj->url, PHP_URL_PATH));
//                    if (!empty($fileName)){
//                        unlink('uploads/avatar/'.$fileName);
//                    }
//                    $dataObj->delete();
//                }
//
//                $imageUrl           = Helper::base64AvatarImageStore("uploads/avatar/", $request->media);
//
//                $info->media()->create([
//
//                    'url'           => $imageUrl
//
//                ]);
//                $info                   = $this->repository->show($id);
//            }


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