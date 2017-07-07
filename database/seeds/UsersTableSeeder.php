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
        $user = new \App\User();
        $user->name = "Rungtip";
        $user->user_type_id = "1";
        $user->username = "admin";
        $user->email = "rtpa@hotmail.com";
        $user->password = bcrypt("1234");
        $user->save();
    }
}
