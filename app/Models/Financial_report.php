<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Financial_report extends Model
{
    protected $fillable = ['title', 'report', 'user_id'];

    public function added()
    {
        return $this->belongsTo('\App\Models\User', 'user_id');
    }
}
