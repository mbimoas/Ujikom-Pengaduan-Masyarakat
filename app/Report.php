<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'reports';

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function advices()
    {
        return $this->hasMany('App\Report');
    }
}
