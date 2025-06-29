<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/get-users',[UserController::class,'getUsers']);

Route::post('create-product',function (Request $request){
   return response()->json([
       'status'=>200,
       'message'=>'Product created successfully',
   ]);
});
