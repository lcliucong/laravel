<?php
namespace App\Repositories\Interfaces;
use app\Models\Test;

interface TestRepositoryInterface{
    public function all();

    public function getByName($mod,$name);
}
