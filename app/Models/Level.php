<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];
    public function classes(){
     return   $this->hasMany( ClassName::class,'level_id');
    }
    public function student(){
     return   $this->hasMany( Student::class,'level_id');
    }
    public function event(){
        return   $this->hasMany( Event::class,'level_id');
    }
}
