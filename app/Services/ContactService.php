<?php


namespace App\Services;


use App\Helpers\Helper;
use App\Repositories\ContactRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ContactService
{
    protected $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function createItem($request){
        $validator = Validator::make($request->all(),[
            'name'              => 'required|min:3',
            'email'             => 'required|email',
            'phone'             => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10|nullable',
            'message'           => 'required',
            'status'            => 'required',
        ]);

        if($validator->fails()) {

            return response()->json([
                'status'        => 400,
                'messages'      => config('status.status_code.400'),
                'errors'        => $validator->errors()->all()
            ]);
        }
        $data                   = $request->all();
        $data['id']             = Helper::idGenarator();

//        return $data;

        DB::beginTransaction();
        try{

            $this->contactRepository->create($data);
            $info               = $this->contactRepository->show($data['id']);

        }catch (Exception $e) {

            DB::rollBack();
            Log::error('Found Exception: ' . $e->getMessage() . ' [Script: ' . __CLASS__ . '@' . __FUNCTION__ . '] [Origin: ' . $e->getFile() . '-' . $e->getLine() . ']');

            return response()->json([
                'status'        => 424,
                'messages'      => config('status.status_code.424'),
                'error'         => $e->getMessage()
            ]);
        }

        DB::commit();

        return response()->json([
            'status'            => 200,
            'message'           => config('status.status_code.200'),
            'info'              => $info
        ]);
    }
}