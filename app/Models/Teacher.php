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
    protected $fillable = ['user_id','firstname','middlename','lastname','role','status'];
    public function reports()
    {
        return $this->hasOne('\App\Models\Report', 'id');
    }

}