<?php

use App\Tasks;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
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
                'task_name' => 'Task 1',
                'priority_id' => 2,
                'status' => 'completed',
                'completed_on' => Carbon::createFromTimeString('2005-10-19 10:23:54+02'),
                'created_at' => Carbon::createFromTimeString('2004-10-19 10:23:54+02'),
                'deleted_at' => Carbon::createFromTimeString('2006-10-19 10:23:54+02'),
            ],
            [
                'task_id' => 2,
                'task_name' => 'Task 2',
                'priority_id' => 1,
                'status' => 'incompleted',
                'completed_on' => Carbon::createFromTimeString('2005-10-19 10:23:54+02'),
                'created_at' => Carbon::createFromTimeString('2004-10-19 10:23:54+02'),
                'deleted_at' => Carbon::createFromTimeString('2006-10-19 10:23:54+02'),
            ],
            [
                'task_id' => 3,
                'task_name' => 'Task 3',
                'priority_id' => 3,
                'status' => 'completed',
                'completed_on' => Carbon::createFromTimeString('2005-10-19 10:23:54+02'),
                'created_at' => Carbon::createFromTimeString('2004-10-19 10:23:54+02'),
                'deleted_at' => Carbon::createFromTimeString('2006-10-19 10:23:54+02'),
            ],
            [
                'task_id' => 4,
                'task_name' => 'Task 1',
                'priority_id' => 2,
                'status' => 'incompleted',
                'completed_on' => Carbon::createFromTimeString('2005-10-19 10:23:54+02'),
                'created_at' => Carbon::createFromTimeString('2004-10-19 10:23:54+02'),
                'deleted_at' => Carbon::createFromTimeString('2006-10-19 10:23:54+02'),
            ],
        ]);
    }
    private function create(array $rows)
    {
        foreach ($rows as $row) {
            Tasks::create($row);
        }
    }

}
