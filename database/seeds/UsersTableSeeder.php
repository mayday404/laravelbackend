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
        factory(App\User::class, 20)->create();

        $user = new App\User;
        $user->username = "mayank";
        $user->fullname = "Mayank Kushwaha";
        $user->email = "maykush1999@gmail.com";
        $user->mobile = 9723733506;
        $user->adharno = 758020051554;
        $user->password = Hash::make("qwerty");
        $user->role = "admin";

        $user->save();
    }
}
