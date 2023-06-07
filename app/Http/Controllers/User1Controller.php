<?php

// <-- CONTROLLER - The Middle Man
namespace App\Http\Controllers;
use Illuminate\Http\Response;

use Illuminate\Http\Request; // <-- handling http request in lumen
//use App\Models\User; // <-- The model
use App\Traits\ApiResponser; //<--- use to standarized our code for api response

use App\Services\User1Service; //<---User1 Services
// use DB; // <----if you're not using lumen eloquent you can use DB coponent in lumen

Class User1Controller extends Controller {  

use ApiResponser;

public $user1Service;

public function __construct(User1Service $user1Service){
    $this->user1Service =$user1Service;
    $this->middleware('auth:api', ['except' => ['login', 'refresh', 'logout']]);
}


//Index
public function index()
{
//
    return $this->successResponse($this->user1Service->obtainUsers1());
}

// ADD
public function add(Request $request )
    {
    return $this->successResponse($this->user1Service->createUser1($request->all(),Response::HTTP_CREATED));
    }

// GET
// public function get(){
      

// }

// GET (ID)
public function getID($id){
    {
    return $this->successResponse($this->user1Service->obtainUser1($id));
    }
}

// UPDATE
public function update(Request $request,$id){
    return $this->successResponse($this->user1Service->editUser1($request->all(),$id));
}

// DELETE
public function delete($id)
{
    return $this->successResponse($this->user1Service->deleteUser1($id));
}

}