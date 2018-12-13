<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thing extends Model
{
    protected $fillable = [
        'name',
        'student_count',
        'five',
        'five_percent',
        'four',
        'four_percent',
        'three',
        'three_percent',
        'two',
        'two_percent',
        'cpu',
        'pu',
        'sa'
    ];
}
