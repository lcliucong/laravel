<?php namespace App\Repositories;
use App\Models\Test;
use App\Repositories\Interfaces\TestRepositoryInterface;
use Illuminate\Support\Facades\DB;

class Testrepository implements TestRepositoryInterface{
    public $test;

    function __construct(Test $test){
        $this->test = $test;
    }
    public function all()
    {
        // TODO: Implement all() method.
        return Test::all();
    }

    public function getByName($mod,$test)
    {
        // TODO: Implement getByName() method.
        return DB::table($mod)->where('name',$test)->get();
    }
}
