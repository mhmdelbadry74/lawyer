<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;

class SubGroup extends Model 
{

    protected $table = 'sub_groups';
    public $timestamps = true;
    protected $fillable = array('name', 'group_id');

}