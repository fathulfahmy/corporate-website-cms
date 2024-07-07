<?php

namespace Database\Seeders;

use App\Models\Associate;
use App\Models\Blog;
use App\Models\Collaborator;
use App\Models\Fellow;
use App\Models\Inbox;
use App\Models\Postdoctoral;
use App\Models\Postgraduate;
use App\Models\Project;
use App\Models\Sponsor;
use App\Models\User;
use App\Models\Workshop;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Blog::factory(50)->create();
        Inbox::factory(50)->create();
        Collaborator::factory(50)->create();
        Sponsor::factory(50)->create();
        Workshop::factory(50)->create();
        Project::factory(50)->create();
        Fellow::factory(50)->create();
        Associate::factory(50)->create();
        Postdoctoral::factory(50)->create();
        Postgraduate::factory(50)->create();
    }
}
