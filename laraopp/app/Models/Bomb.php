<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bomb extends Model
{
    protected $fillable = ['id','book_name','price','stocks',];
}
