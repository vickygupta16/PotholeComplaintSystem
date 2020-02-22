<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    // Table name
    protected $table = 'complaints';
    // Primary Key 
    public $primaryKey = 'id';
}
