<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index(Request $request){
        $id = $request->id;
        $name = "Donal Trump";
        $age = "75";

        $data = [
            "id"=> $id,
            "name"=> $name,
            "age"=> $age
        ];

        // return "My id is {$id}, my Name is {$name} and  my age is {$age}";
        // return $data;
          // Create a cookie
        //   $cookie = cookie(
        //     'access_token',
        //     '123-XYZ',
        //     1, // minutes
        //     '/',
        //     $_SERVER['SERVER_NAME'],
        //     false, // secure
        //     true // httpOnly
        // );

        // return response()->json($data)->withCookie($cookie)->setStatusCode(200);

                $cookie_name = 'access_token';
                $value = '123-XYZ';
                $minutes = 1;
                $path = '/';
                $domain = $_SERVER['SERVER_NAME'];
                $secure = false;
                $httpOnly = true;

                // $cookie = cookie(
                //     $name,
                //     $value,
                //     $minutes,
                //     $path,
                //     $domain,
                //     $secure,
                //     $httpOnly
                // );
        
                // return response()->json($data)->withCookie($cookie)->setStatusCode(200);
                return response()->json($data)->withCookie($cookie_name,$value,$minutes,$path,$domain,$secure,$httpOnly)->setStatusCode(200);
    }
}
