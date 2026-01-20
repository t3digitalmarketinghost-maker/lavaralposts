<?php

namespace Database\Seeders;

use App\Models\Greeting;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Greeting::create([
            'name' => 'World',
            'message' => 'Hello, World! Welcome to our app!'
        ]);

        Greeting::create([
            'name' => 'Laravel',
            'message' => 'Hello from Laravel 10!'
        ]);

        Greeting::create([
            'name' => 'React',
            'message' => 'Hello from React 18!'
        ]);
    }
}
