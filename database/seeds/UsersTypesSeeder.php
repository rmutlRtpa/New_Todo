<?php

use Illuminate\Database\Seeder;

class UsersTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_type = new \App\UserType();
        $user_type -> name = "admin";
        $user_type->save();

        $user_type = new \App\UserType();
        $user_type ->name = "User";
        $user_type->save();

    }
}
