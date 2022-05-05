<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\News;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //查询 $select = DB::select('select news_title,news_content from `news` where news_auth = :asd',['作者']);
       //新增 $insert = DB::insert('insert into news (news_title,news_auth,news_content) values (?,?,?)',['今日天气晴好','小刘',"石家庄今日晴朗，一切安好"]);
       //更新 $update = DB::update('update news set news_content = :content where id=:ids',['MayDay五月天11111',2]);
       //删除 $delete = DB::delete('delete from news where id =:id',[1]);
       //事务 DB::transaction(function(){
       //        DB::update('update news set news_content = :content where id =2',['石家庄今日晴空万里']);
       //        DB::delete('delete from news where id=:id',[3]);
       //    });
       /**
        * 查询构造器
        */
       //数据库查询  $data = DB::table('news')->orderBy('id','desc')->chunk(50,function ($k){
       //           foreach ($k as $v){
       //               $res = DB::update('update news set news_content=:cont where id=:id',['cont'=>'石家庄今日晴空万里。','id'=>$v->id]);
       //               if($v->news_auth!='小韩'){
       //                   return false;
       //               }
       //           }
       //          });
       //查询符合条件的某几个列 $res = DB::table('news')->where('news_auth','小韩')->select('news_title as t','news_auth as name')->get();
       //子连接查询  $query = DB::table('news_area')->where('news_id2','!=','');//->where('news_time','>','2022-03-01');//->select('id','news_title','news_auth');
       //     $res = DB::table('news')->joinSub($query,'news_area',function ($join){
       //         $join->on('news.id', '=', 'news_area.news_id')->orOn('news.id', '=', 'news_area.news_id2');
       //     })->select('news.news_auth','news.news_title')
       //     ->get();
       // union语句 $res = DB::table('news')
       //     ->where('news_status','!=',0);
       // $res1 = DB::table('news')
       //     ->where('news_time','>','2022-03-01')
       //     ->union($res)
       //     ->get();
       //whereor语句  逻辑分组
//             $res = DB::table('news')->where('news_status','>',0)
//                              ->Where(function ($qry){
//                                 $qry->where('news_time','2020-03-01')
//                                      ->orWhere('news_auth','小韩');
//                              })
//                      ->select('news_title','news_status','news_time')
//                      ->toSql();
////                      ->get();
                             /*
                              *between  /  in 语句
                              *
                              * */
//        $res = DB::table('news')->whereBetween('news_time',['2022-03-01','2022-03-10'])
//                                          ->orWhereBetween('news_time',['2022-4-1','2022-4-30'])
//                                          ->get();
//        $res = DB::table('news')->whereNotIn('id',[1,2])    //不在12或者在34里
//                                      ->orWhereIn('id',[3,4])
//            ->get();
//        $res = DB::table('news')->oldest('news_time')->first();
//        $res = DB::table('news')->latest()->first();
        $res = DB::table('news_area')->groupBy('news_area')->having('news_id','>',1)->get();
//        $res = DB::table('news')->
        dd($res);


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        dd($test::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
