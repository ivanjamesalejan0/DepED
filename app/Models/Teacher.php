<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'firstname', 'middlename', 'lastname', 'role', 'status', 'gender', 'school', 'image'];

    public function reports()
    {
        return $this->hasMany('\App\Models\Report', 'id');
    }

    public function school_data()
    {
        return $this->belongsTo('App\Models\School', 'school', 'school_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

}