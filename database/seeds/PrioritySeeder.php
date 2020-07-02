<?php

use App\ToDoApp\Priorities;
use Illuminate\Database\Seeder;

class PrioritySeeder extends Seeder
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
                'priority_id' => 1,
                'priority_name' => 'urgent',
            ],
            [
                'priority_id' => 2,
                'priority_name' => 'important',
            ],
            [
                'priority_id' => 3,
                'priority_name' => 'ignore',
            ],
            [
                'priority_id' => 4,
                'priority_name' => 'optional',
            ],
        ]);
    }
    private function create(array $rows)
    {
        foreach ($rows as $row) {
            Priorities::create($row);
        }
    }
}
