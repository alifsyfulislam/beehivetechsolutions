<?php


namespace App\Services;


use App\Helpers\Helper;
use App\Models\Media;
use App\Repositories\ClientRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ClientService
{
    protected $repository;

    public function __construct(ClientRepository $repository)
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

            'first_name'             => 'required|string|min:2|max:30',
            'middle_name'            => 'nullable|string|max:30',
            'last_name'              => 'required|string|min:2|max:30',
            'type'                   => 'required',
            'email'                  => 'required|string|max:60|unique:clients',
            'media'                  => 'mimes:jpeg,jpg,png,gif,mp4,mov,ogg|required|max:30000',
            'user_id'                => 'required'

        ],[
            'first_name.required'    => 'first name required',
            'first_name.string'      => 'first name must be string',
            'first_name.min'         => 'first name minimum length 2',
            'first_name.max'         => 'first name maximum length 20',
            'last_name.required'     => 'last name required',
            'last_name.string'       => 'last name must be string',
            'last_name.min'          => 'last name minimum length 2',
            'last_name.max'          => 'last name maximum length 20',
            'type'                   => 'type is required',
            'email.required'         => 'email required',
            'email.string'           => 'email must be string',
            'email.max'              => 'email maximum length 60',
            'email.unique'           => 'email must be unique',
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
        $input['slug']              = Helper::nameSlugify($input['first_name'],$input['middle_name'],$input['last_name']);

        DB::beginTransaction();

        try {

            $this->repository->create($input);
            $info                   = $this->repository->show($input['id'] ? $input['id'] : '');

            if($request->hasFile('media')) {

                $imageUrl           = Helper::base64AvatarImageStore("uploads/avatar/", $request->media);

                $info->media()->create([

                    'url'           => $imageUrl

                ]);
                $info               = $this->repository->show($input['id']? $input['id'] : '');
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

            'first_name'             => 'required|string|min:2|max:30',
            'middle_name'            => 'nullable|string|max:30',
            'last_name'              => 'required|string|min:2|max:30',
            'type'                   => 'required',
            'email'                  => "required|string|max:60|unique:clients,email,$id,id",
            'media'                  => 'mimes:jpeg,jpg,png,gif,mp4,mov,ogg|nullable|max:30000',
            'user_id'                => 'required'

        ],[
            'first_name.required'    => 'first name required',
            'first_name.string'      => 'first name must be string',
            'first_name.min'         => 'first name minimum length 2',
            'first_name.max'         => 'first name maximum length 20',
            'type'                   => 'type is required',
            'email.required'         => 'email required',
            'email.string'           => 'email must be string',
            'email.max'              => 'email maximum length 60',
            'email.unique'           => 'email must be unique',
//            'media.required'         => 'media required',
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
        $input['slug']              = Helper::nameSlugify($input['first_name'],$input['middle_name'],$input['last_name']);


        DB::beginTransaction();

        try {

            $this->repository->update($input, $id);
            $info                   = $this->repository->show($id);

            if($request->hasFile('media')) {

                $dataObj = Media::findorfail($info->media->id);
//                dd($dataObj);
                if (!empty($dataObj->url)){
                    $fileName          = basename(parse_url($dataObj->url, PHP_URL_PATH));
                    if (!empty($fileName)){
                        unlink('uploads/avatar/'.$fileName);
                    }
                    $dataObj->delete();
                }

                $imageUrl           = Helper::base64AvatarImageStore("uploads/avatar/", $request->media);

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