<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser
{

public function successResponse($data, $code = Response::HTTP_OK) // <--- $data is an object variable(you can put any name you want)
{
// Old Code
//return response()->json(['data' => $data, 'site' => 1,], $code);
//this code is changes since the message return is already formatted by API responser of eacjh line
    return response($data, $code)->header('Content-Type', 'application/json');
}

public function validResponse($data, $code = Response::HTTP_OK)
{
    return response()->json(['data' => $data], $code);
}


public function errorResponse($message, $code)
{
    return response()->json(['error' => $message, 'code' => $code], $code);

 }

public function errorMessage($message, $code)
{
    return response($message, $code)->header('Content-Type', 'application/json');
}
}