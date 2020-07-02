<?php


namespace App\Http\Controllers;

use App\ToDoApp\TaskRepositoryInterface;

/**
 * Class TaskController
 * @package App\Http\Controllers
 */
class TaskController extends Controller
{
    /**
     * @var TaskRepositoryInterface
     */
    private $taskRepository;

    /**
     * TaskController constructor.
     * @param TaskRepositoryInterface $taskRepository
     */
    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    /**
     *
     */
    public function index()
    {
        $tasks = $this->taskRepository->getAllTasks();
        dd($tasks->toArray());
//        return redirect()->route('home');
    }

    /**
     * @param $request
     */
    public function create($request)
    {
        $this->taskRepository->createTask($request);
//        return redirect()->route('home');
    }

    /**
     * @param int $taskId
     * @param $request
     */
    public function edit(int $taskId, $request)
    {
        $this->taskRepository->editTask($taskId, $request);
//        return redirect()->route('home');
    }

    /**
     * @param int $taskId
     */
    public function delete(int $taskId)
    {
        $this->taskRepository->deleteTask($taskId);
//        return redirect()->route('home');
    }

}