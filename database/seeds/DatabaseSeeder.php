<?php


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1,100) as $index) {
            DB::table('cardfaker')->insert([
                'name' => str_random(10),
                'body' => str_random(10) . '@gmail.com',

            ]);
        }
    }
}

