<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartype extends Model
{
    use HasFactory;
    protected $fillable = ['cartype','seatCapacity','isenable'];
}
