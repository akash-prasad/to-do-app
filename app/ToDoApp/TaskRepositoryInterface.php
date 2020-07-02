<?php


namespace App\ToDoApp;


use Illuminate\Support\Collection;

interface TaskRepositoryInterface
{
    public function getAllTasks();

    public function createTask($request);

    public function editTask(int $taskId, $request);

    public function deleteTask(int $taskId);
}