<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;

class Income extends Model 
{

    protected $table = 'incomes';
    public $timestamps = true;
    protected $fillable = array('office_id', 'dir_id', 'unit_id', 'income_type_id', 'sender_id', 'sender_detail_id', 'attachment', 'asked_name', 'income_number', 'outcome_number', 'income_date', 'outcome_date', 'income_issues', 'remark', 'status');

}