<?php

namespace App\ToDoApp;

use Illuminate\Database\Eloquent\Model;

class Priorities extends Model
{
    protected $table = 'priorities';
    protected $primaryKey = 'priority_id';
    public $timestamps = false;

    public function tasks()
    {
        return $this->belongsToMany(Tasks::class,'taskPriorities','priority_id','task_id');

    }
}
