<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = ['user_id', 'firstname', 'middlename', 'lastname', 'image'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}