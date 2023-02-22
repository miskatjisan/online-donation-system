<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fooddonate extends Model
{
    use HasFactory;
    protected $fillable = ['fname','phone','address','dontype','typesfood','quantity','whenmadeit','volunteer','status'];

   
}
