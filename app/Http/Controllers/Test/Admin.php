<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Tymon\JWTAuth\Contracts\Providers\JWT;
use tymon\jwtAuth\src\Facades\JWTAuth;
use App\Http\Controllers\ControllerBase;

class Admin extends Controller
{
    //登录
    public function loginview(Request $request,$ids=1){
        if($request->isMethod('get')){
            return view('login/login');
        }
//        if($request->route()->named('admin.logined')){
//                $data = $request->validate([
//                    'username'=>'required|max:12'
//                ]);
//
//        }
        if($request->routeIs('admin.sign')){

        }
    }
    public function sel(Test $test){
        dd($test);
    }
    public function login(Request $request){
        $data = $request->validate([
            'username'=>'required|max:12|min:5',
            'password'=>'required'
        ],[
            'required'=>'请输入:attribute'
        ],
        [
            'username'=>'一个用户名',
            'password'=>'一个密码'
        ]);
        dd($data);die;
    }
    public function test(Request $request){
        $file = public_path()."/static/picture/logo.png";
        return response()->file($file);
    }
    public function saves(){

    }
}
