<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
//use app\Http\Controllers\Test\Admin;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//定义Test目录的路由  namespace相当于app/Http/Controllers. 需要指出你的方法在哪个目录，模块,当前只有一个Test模块
//Prefix就是声明一个自定义路径，注意大小写敏感。比如，第一个prefix=>"Test"，路径应该写http://localhost/laraveltest/public/Test/gets
//Route::get("你定义的路由名称","控制器名@方法名");
//->name 只会在前端提交路径中生效，直接路径访问不生效
/**
 * Test模块
 */
Route::group(['namespace'=>'Test'],function (){
//    #### Test控制器
    Route::group(['prefix'=>'test'],function(){
        Route::get('gets','Test@gets');
        //表格数据渲染页面
        Route::get('info',[\App\Http\Controllers\Test\Test::class, 'sel'])->name('test.info');
        //添加数据页面
        Route::get("adds",'Test@add')->name('add');
        //添加数据控制器
        Route::post('adds','test@add')->name('add.ipt');
        //搜索
        Route::post("selpage",'Test@add')->name('add.selects');
    });
//    ### Admin控制器
    //渲染登录页面
    Route::group(['prefix'=>'admin','middleware'=>'admin.logined'],function(){
        Route::get('login/{id?}',"Admin@loginview")->withoutMiddleware('admin.logined');
    //登录接收接口
        Route::post('login',"Admin@login")->name('admin.logined')->withoutMiddleware(\App\Http\Middleware\TestLoginMid::class);
    //注册接收接口
        Route::post('sign',"Admin@login")->name('admin.sign')->withoutMiddleware('admin.logined');
        //文件上传
        Route::post('getfile',"Admin@files")->name('admin.files')->withoutMiddleware(\App\Http\Middleware\TestLoginMid::class);
        //测试路由模型绑定
        Route::get('test/{test}',"Admin@sel")->withoutMiddleware('admin.logined');
    });

});
//TestController路由
Route::get('pl/{test}',"Test\TestController@show");
// 兜底路由 404页面丢失或不存在
Route::fallback(function(){
    return view('larsql/404');
});
//测试Response响应的路由
Route::group(['prefix'=>'response'],function (){
   Route::get('res',function(){
       $type = 'test header';
       return response('this is res',200)->withHeaders(
           [
               'content-types'=>$type,
               'header1' =>'header1s',
               'header2' =>'header2s',
               'public' => 'this is public header'
           ]
       );
   });
});
//Request请求
Route::group(['prefix'=>'request'],function(){
    Route::get('test','Test\Admin@test')->name('r.routed');
});

//Response返回cookie值
Route::group(['prefix'=>'resCookie'],function(){
   Route::get('cok',function (){
//       Cookie::queue('cookieWithname','cookie value',1);
       $cok = cookie('cookiename','value',0.5);
//       return response('this is cookie quene',200);
//       Cookie::queue($cok);
//       Cookie::queue(Cookie::forget('cookiename'));
       return response('this is cookie response',200);//->cookie($cok)->withoutCookie('cookiename');

   });
   //Response()重定向
//   Route::get('red',function(){
//      return redirect()->action([\App\Http\Controllers\Test\Admin::class,'routeIs']);
//   });
});



Route::get('insert/{id?}','Test\Admin@dp');
//测试Repository
Route::get('gets','Test\test@gets');
//
Route::post("test",'Test\test@test')->name("message.msg");


//删除数据控制器
Route::post("del",'Test\test@add')->name('add.del');
Route::post("dels","test@del")->name("test.del");
//输出配置项
Route::get("configs","test@con");
