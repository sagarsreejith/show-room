<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Brand;
use App\Models;
use Validator;

class GetBrandsController extends BaseController
{
    //

    public function getAllBrrands(Request $request)
    {
        $brands = Brand::with('models')->get();
        $success =  $brands;
        return $this->sendResponse($success, 'Records Fetched');
    }


    public function getAllModelSpec(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'model_id' => 'required|numeric'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $input = $request->all();
        $Model = Models::with(['arabicSpec', 'englishSpec'])->get()->find($input['model_id']);
        $success =  $Model;
        return $this->sendResponse($success, 'Records Fetched');
    }
    
}
