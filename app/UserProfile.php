<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    //mendeklarasikan nama table 
    protected $table = 'userprofile';
    protected $fillable = ['user_id','nama','program_study'];
}
