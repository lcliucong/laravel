<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    public $table = 'admin';
    public $timestamps = true;
    public function add(){
        $this->phone=1593344;
        $this->username='admin';
        $this->password=123456;
        $this->save();
    }
}
