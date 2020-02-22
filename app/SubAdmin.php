<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubAdmin extends Model
{
    protected $table = 'sub_admins';
    public $primaryKey = 'sa_id';
    public $timestamps = false;
}
