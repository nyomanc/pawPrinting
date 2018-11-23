<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User;
        $user ->name="Admin"; 
        $user ->phone="0899876"; 
        $user ->email="hendput12@gmail.com"; 
        $user ->password="12345"; 
        $user ->is_admin=true; 
        $user ->save(); 
        

    }
}
