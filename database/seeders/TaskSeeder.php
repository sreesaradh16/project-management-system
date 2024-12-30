<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            [
                'id' => 1,
                'project_id' => 1,
                'name' => 'Task 1',
                'status' => true,
            ],
            [
                'id' => 2,
                'project_id' => 1,
                'name' => 'Task 2',
                'status' => true,
            ],
            [
                'id' => 3,
                'project_id' => 1,
                'name' => 'Task 3',
                'status' => true,
            ],
            [
                'id' => 4,
                'project_id' => 4,
                'name' => 'Task 4',
                'status' => true,
            ],
            [
                'id' => 5,
                'project_id' => 4,
                'name' => 'Task 5',
                'status' => true,
            ],
        ];

        foreach ($tasks as $task) {
            Task::updateOrCreate(
                ['id' => $task['id']],
                [
                    'project_id' => $task['project_id'],
                    'name' => $task['name'],
                    'status' => $task['status'],
                ]
            );
        }
    }
}
