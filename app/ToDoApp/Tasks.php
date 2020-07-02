<?php

namespace App\ToDoApp;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'task_id';
    public $timestamps = false;

    public function priorities()
    {
        return $this->belongsToMany(Priorities::class,'taskPriorities','task_id','priority_id');
    }

    public function getAllTasks()
    {
        return $this->with('priorities')->get();
    }

    public function createTask($taskData)
    {
        $task = new Tasks();
        $task->task_name = $taskData['taskName'];
        $task->priority_id = $taskData['priority'];
        $task->status = $taskData['status'];
        $task->created_at = Carbon::now();
        $task->save();
    }

    public function editTask(int $taskId, $taskData)
    {
        $task = Tasks::where('task_id','=', $taskId)->first();

        if(!empty($task)) {
            $task->task_name = $taskData['taskName'];
            $task->priority_id = $taskData['priority'];
            $task->status = $taskData['status'];
            $task->save();
        }
    }

    public function deleteTask(int $taskId)
    {
        return Tasks::where('task_id', '=', $taskId)
            ->delete();
    }
}
