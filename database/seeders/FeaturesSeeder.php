<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('features') ->insert([
            ['name' => 'Model', 'description' => 'Performs requests and provides output from the database to send to the controller.',],
            ['name' => 'View', 'description' => 'Controls the UI and what the user sees.',],
            ['name' => 'Controller', 'description' => 'Performs requests to the model, and displays the output to the view.',],
            ['name' => 'Routes', 'description' => 'It is how the framework/website maps HTTP requests to the appropriate controllers and views.',],
            ['name' => 'Middleware', 'description' => 'Validates or checks the request before allowing access to the controller.',],
            ['name' => 'Blade Templates', 'description' => 'Stores the php code and UI of each webpage.',],
            ['name' => 'Migrations', 'description' => 'Creates the information and fields for the database.',],
            ['name' => 'Seeders', 'description' => 'Creates the dummy or initial data to be used in the database.',],
            ['name' => 'Database', 'description' => 'Holds and stores the information and data needed by the website.',],
            ['name' => 'Eloquent ORM', 'description' => 'An Object Relational Mapper that allows the use of php objects to perform database operations.',]
        ]);
    }
}
