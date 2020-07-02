<?php


namespace App\ToDoApp;


use Illuminate\Support\Collection;

class TaskRepository implements TaskRepositoryInterface
{
    private $taskModel;

    /**
     * TaskRepository constructor.
     * @param Tasks $taskModel
     */
    public function __construct(Tasks $taskModel)
    {
        $this->taskModel = $taskModel;
    }

    public function getAllTasks()
    {
        return $this->taskModel->getAllTasks();
    }

    /**
     * @param $request
     */
    public function createTask($request)
    {
        return $this->taskModel->createTask($request);
    }

    /**
     * @param int $taskId
     * @param $request
     */
    public function editTask(int $taskId, $request)
    {
        return $this->taskModel->editTask($taskId, $request);
    }


    /**
     * @param int $taskId
     * @return mixed
     */
    public function deleteTask(int $taskId)
    {
        return $this->taskModel->deleteTask($taskId);
    }
}