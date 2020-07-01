<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'task_id';
    public $timestamps = false;
}
