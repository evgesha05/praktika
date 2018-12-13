<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function things()
    {
        return $this->hasMany('App\Thing');
    }
    protected $fillable = [
        'year_begin', 'year_end', 'semester', 'user_id'
    ];
}
