<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as Auth;

class login extends Model implements Authenticatable
{
    use HasFactory;
    use Auth;
    protected $table="signup";
    public $timestamps=false;
}
