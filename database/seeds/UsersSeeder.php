<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = 'edo';

        DB::table('users')->insert([
            'name'       => ucfirst($name),
            'email'      => "{$name}fre@gmail.com",
            'password'   => Hash::make('password'),
            'created_at' => \Illuminate\Support\Carbon::now(),
        ]);
    }
}
