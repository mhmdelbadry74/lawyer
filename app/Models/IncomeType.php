<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;

class IncomeType extends Model 
{

    protected $table = 'income_types';
    public $timestamps = true;
    protected $fillable = array('name');

}