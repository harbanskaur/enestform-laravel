<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use for login authentication 
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as Auth;

class Login extends Model implements Authenticatable
{
    use HasFactory;
    use Auth;// authentication 
    protected $table = "signup";
    public $timestamps = false;
}
