<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
  'title', 'description',
     'date', 'location',
     'created_by','level_id','
     class_id'];

     public function level(){
         return $this->belongsTo(Level::class,'level_id');
     }
     public function classname(){
         return $this->belongsTo(ClassName::class,'class_id');
     }
     public function creatby(){
         return $this->belongsTo(User::class,'admin_id');
     }
}
