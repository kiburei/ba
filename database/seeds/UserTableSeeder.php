<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'mother',
            'email'=> 'mother@bongo.com',
            'password' =>  bcrypt('123456'),
            'userCategory' => 4
        ]);
    }
}
