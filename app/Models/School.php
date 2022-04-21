<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'tbl_schools';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['school_id', 'school_name', 'stats'];

    public function teacher()
    {
        return $this->hasMany('App\Models\Teacher', 'school_id', 'school');
    }

}