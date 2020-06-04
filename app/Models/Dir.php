<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;

class Dir extends Model 
{

    protected $table = 'dirs';
    public $timestamps = true;
    protected $fillable = array('name');

}