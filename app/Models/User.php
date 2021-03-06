<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    use HasFactory;
    public $timestamps = true;
    protected $table = 'user';
    protected $fillable = ['mail_address', 'password', 'name', 'address', 'phone'];
}

