<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Policies extends Model
{
    protected $fillable = ['policies_title', 'policies', 'frame_title', 'frame', 'user_id'];

    public function added()
    {
        return $this->belongsTo('\App\Models\User', 'user_id');
    }
}
