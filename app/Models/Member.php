<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    public $timestamps = false;
    protected $table = "members";
    protected $fillable = ['username', 'email', 'password'];
    protected $guarded = [];
}
