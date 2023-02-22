<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zakatdonate extends Model
{
    use HasFactory;
    protected $fillable = ['fname','phone','total','address','dontype','Paytype','acctype','trackid', 'volunteer','status'];
}
