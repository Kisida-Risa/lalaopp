<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recipe extends Model
{
    use HasFactory;
	
	protected $table = "user_recipe";
	
	protected $fillable = ['name', 'url', 'description', 'user_id'];
}
