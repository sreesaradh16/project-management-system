<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'id' => 1,
                'name' => 'Project 1',
                'status' => true,
            ],
            [
                'id' => 2,
                'name' => 'Project 2',
                'status' => false,
            ],
            [
                'id' => 3,
                'name' => 'Project 3',
                'status' => true,
            ],
            [
                'id' => 4,
                'name' => 'Project 4',
                'status' => true,
            ],
            [
                'id' => 5,
                'name' => 'Project 5',
                'status' => true,
            ],
        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(
                ['id' => $project['id']],
                [
                    'name' => $project['name'],
                    'status' => $project['status'],
                ]
            );
        }
    }
}
