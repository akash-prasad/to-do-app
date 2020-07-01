<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Priorities extends Model
{
    protected $table = 'priorities';
    protected $primaryKey = 'priority_id';
    public $timestamps = false;
}
