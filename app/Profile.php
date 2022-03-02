<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = "profile"; 
    protected $fillable = ['umur', 'biodata', 'alamat', 'user_id'];

    public $timestamps = false;
}
