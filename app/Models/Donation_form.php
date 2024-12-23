<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation_form extends Model
{
    protected $fillable = ['name', 'city', 'phone', 'address','donation_type', 'image'];

}
