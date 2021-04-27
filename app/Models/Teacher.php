<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function reports()
    {
        return $this->hasOne('\App\Models\Report', 'id');
    }

}