<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class koordinarSeeder extends Seeder
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
        DB::table('koordinars')->insert([
            'item_id' => 1,
            'nama_koor' => $faker->name,
            'alamat' => $faker->address,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        }
    }
}
