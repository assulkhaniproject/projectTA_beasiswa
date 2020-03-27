<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    //mendeklarasikan nama table 
    protected $table = 'userprofile';
    protected $fillable = ['nama','program_study'];
}
