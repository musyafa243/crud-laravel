<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class itemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        
        for ($i = 1; $i <= 150; $i++) {
            DB::table('items')->insert([
            'code' => $faker->ean8,
            'nama' => $faker->word,
            'jumlah' => $faker->numberBetween(1,100),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        }
    }
}
