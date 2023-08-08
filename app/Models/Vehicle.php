<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    //use HasFactory;
    protected $table = 'vehicle';
    protected $primaryKey = 'id';
    use SoftDeletes;
}
