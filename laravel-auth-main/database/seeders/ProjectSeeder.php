<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = config('projects');

        foreach ($projects as $project) {

            $newProject = new Project();
            $newProject->title = $project['title'];
            $newProject->save();
        }
    }
}
