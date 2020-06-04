<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;

class RuleUser extends Model 
{

    protected $table = 'rule_users';
    public $timestamps = true;
    protected $fillable = array('user_id', 'rule_id');

}