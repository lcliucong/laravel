<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\TestRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function config;
use function dump;
use function view;

class Test extends Controller
{
    protected $test;
    private $testRepository;

    public function __construct(TestRepositoryInterface $testRepository){
        $this->testRepository = $testRepository;
    }
    public function gets(){
        $test="德华";
        $mod = "Test";
        $all = $this->testRepository->getByName($mod,$test);
        dump($all);die;
    }
    /**
     * @param $id
     * @return string
     */
    //主页
    public function home($id){
        if($id==1){
            return "用户1";
        }
            return "<h1>$id</h1>" ;
    }
//    查看配置项
    public function con(){
        $value = config('app.timezone');
        if($value=='PRC'){
            config(['app.timezone' => 'America/Chicago']);
        }
        dump(config('app.timezone'));
    }
//    数据列表渲染
    public function sel(Request $request){
        $info = DB::select('select * from test');
        return view('hello',['info'=>$info]);
    }
//    简单输出
    public function test(Request $request){
        $ipt = $request->input('test');
        echo "<h2>$ipt</h2>";
    }
//    添加页面，添加数据，删除数据
    public function add(Request $request){
        if($request->isMethod('get')) {
            return view('larsql/add');
        }
        if($request->route()->named('add.ipt')){
            $data = $request->input();
            $res = DB::insert('insert into test(name,sex,class,score) values (?,?,?,?)',[$data['name'],$data['sex'],$data['class'],$data['score']]);
            if ($res){
                return 'success';
            }
        }
        if($request->route()->named('add.del')){
            $data = $request->input();
            if ($data){
                $res = DB::delete('delete from test where id=:id',[$data['id']]);
                if($res){
                    return response()->json(['message'=>'删除成功！']);
                }
            }
        }
        //查询数据
        if($request->route()->named('add.selects')){
            $data = $request->input();
            if($data){
                $res = DB::select('select * from test where name=:names',[$data['name']]);
                return $res;
            }
        }
    }
//    删除数据
    public function del(Request $request){
        if($request->route()->named('test.del')){
            $data = $request->input();
            if($data){
                $res = DB::delete('delete from test where id=:id',[$data['id']]);
                if($res){
                    return 'you delete that successfuly!';
                }else{
                    return 'sry,something errors';
                }
            }
        }
    }

}


