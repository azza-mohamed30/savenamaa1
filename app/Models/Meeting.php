<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $fillable = ['title', 'file', 'user_id'];

    public function added()
    {
        return $this->belongsTo('\App\Models\User', 'user_id');
    }
}
