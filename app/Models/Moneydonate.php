<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moneydonate extends Model
{
    use HasFactory;
    protected $fillable = ['fname','phone','total','address','Paytype','acctype','trackid', 'status'];
}
