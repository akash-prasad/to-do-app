<?php

use App\ToDoApp\Priorities;
use App\ToDoApp\Tasks;
use Illuminate\Database\Seeder;

class TaskPrioritiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->create([
            [
                'task_id' => 1,
                'priority_id' => 1,
            ],
            [
                'task_id' => 1,
                'priority_id' => 2,
            ],
            [
                'task_id' => 2,
                'priority_id' => 3,
            ],
            [
                'task_id' => 2,
                'priority_id' => 4,
            ],
        ]);
    }
    private function create(array $rows)
    {
        $priorities = Priorities::all();

// Populate the pivot table
        Tasks::all()->each(function ($task) use ($priorities) {
            $task->priorities()->attach(
                $priorities->random(rand(1, 3))->pluck('priority_id')->toArray()
            );
        });
    }
}
