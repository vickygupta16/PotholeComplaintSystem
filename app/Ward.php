<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    protected $table = 'wards';
    public $primaryKey = 'ward_id';
    public $timestamps = false;
}
