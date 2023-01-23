<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = Project::all();

        // dd($projects);

        foreach($projects as $project)
            $project->type_id = Category::inRandomOrder()->first()->id;
            // dd($project->type_id );
            $project->update();
    }
}
