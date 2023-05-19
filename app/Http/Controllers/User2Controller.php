<?php

// <-- CONTROLLER - The Middle Man
namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request; // <-- handling http request in lumen
//use App\Models\User; // <-- The model
use App\Traits\ApiResponser; //<--- use to standarized our code for api response
use App\Services\User2Service; //<---User2 Services
// use DB; // <----if you're not using lumen eloquent you can use DB coponent in lumen

Class User2Controller extends Controller {  

use ApiResponser;

public $user2Service;

public function __construct(User2Service$user2Service){
    $this->user2Service =$user2Service;
}

//Index
public function index()
{
//
    return $this->successResponse($this->user2Service->obtainUsers2());
}

// ADD
public function add(Request $request )
    {
    return $this->successResponse($this->user2Service->createUser2($request->all(),Response::HTTP_CREATED));
    }

// GET
// public function get(){
      

// }

// GET (ID)
public function getID($id){
    {
    return $this->successResponse($this->user2Service->obtainUser2($id));
    }
}

// UPDATE
public function update(Request $request,$id){
    return $this->successResponse($this->user2Service->editUser2($request->all(),$id));
}

// DELETE
public function delete($id)
{
    return $this->successResponse($this->user2Service->deleteUser2($id));
}

}