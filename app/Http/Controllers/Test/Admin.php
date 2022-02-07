<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Tymon\JWTAuth\Contracts\Providers\JWT;
use tymon\jwtAuth\src\Facades\JWTAuth;
use App\Http\Controllers\ControllerBase;
//use Symfony\Component\Console\Input\Input;

class Admin extends Controller
{
    //登录
    public function login(Request $request,$ids=1){
        if($request->isMethod('get')){
//            $token = ControllerBase::createToken($ids);
            return view('login/login');
        }
        if($request->route()->named('admin.logined')){
            $data = $request->input();
            $user = DB::select('select * from user where username =:username',[$data['username']]);
            if(empty($user)){
                return response()->json(['code'=>504,'message'=>'您输入的账号不存在哦~']);
            }
            $upw = DB::select('select * from user where username=:username and password =:pwd',[$data['username'],$data['password']]);
            if($upw){
               $token =  ControllerBase::createToken($upw[0]->id);
               return redirect()->route('test.info',$token);
            }else{
                return response()->json(['code'=>504,'message'=>'密码错误']);
            }
        }
        if($request->route()->named('admin.sign')){
            $data = $request->input();
            dump($data);die;
        }
    }
}
