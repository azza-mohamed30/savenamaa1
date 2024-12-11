<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'description', 'image', 'user_id'];

    public function added()
    {
        return $this->belongsTo('\App\Models\User', 'user_id');
    }
}
