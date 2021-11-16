<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    private $table = 'drivers';
    protected $fillable = [
        'name',
        'nacionality',
        'access_category',
        'favority_track',
        'age'
    ];
}
