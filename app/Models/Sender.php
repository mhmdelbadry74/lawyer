<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;

class Sender extends Model 
{

    protected $table = 'senders';
    public $timestamps = true;
    protected $fillable = array('name');

}