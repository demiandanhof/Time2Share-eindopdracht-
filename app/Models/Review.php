<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function myUser(){
        return $this->belongsTo(\App\Models\User::class,"user_id","id"); 
    }

    public $timestamps = false;
}
