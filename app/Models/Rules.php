<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;

class Rules extends Model 
{

    protected $table = 'rules';
    public $timestamps = true;
    protected $fillable = array('name', 'rule', 'page_id');

}