<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Alan Rincón',
            'email' => 'alan_octavio_95@hotmail.com',
            'password' => bcrypt('secret'),
            'type' => '4',
            'fk_id' => '0',
            'vehicles' => '0',
            'brand' => 'null',
            'percent' => '0'
        ]);
    }
}
