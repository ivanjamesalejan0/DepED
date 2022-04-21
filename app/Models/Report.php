<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'teacher_id', 'status', 'data', 'province', 'municipality', 'barangay',
    ];

    public function teacher()
    {
        return $this->belongsTo('\App\Models\Teacher', 'teacher_id');
    }
}