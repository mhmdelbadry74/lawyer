<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;

class SenderDetail extends Model 
{

    protected $table = 'sender_details';
    public $timestamps = true;
    protected $fillable = array('name');

}