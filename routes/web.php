<?php

use Illuminate\Support\Facades\Route;
//use app\Http\Controllers\Test\Test;
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
        Route::get('login',"Admin@login")->withoutMiddleware('admin.logined');
    //登录接收接口
        Route::post('login',"Admin@login")->name('admin.logined')->withoutMiddleware(\App\Http\Middleware\TestLoginMid::class);
    //注册接收接口
        Route::post('sign',"Admin@login")->name('admin.sign')->withoutMiddleware('admin.logined');
    });

});
// 404页面丢失或不存在
Route::fallback(function(){
    return view('larsql/404');
});
Route::middleware('through');
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
