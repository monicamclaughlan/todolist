<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Todo::create(["subject" => "Breakfast", "details" => "Eat Breakfast"]);
        Todo::create(["subject" => "Lunch", "details" => "Eat Lunch"]);
        Todo::create(["subject" => "Dinner", "details" => "Eat Dinner"]);
        echo("Todos Created!");
    }
}
