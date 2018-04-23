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
        for($i=0; $i<10; $i++){
        $user = new \App\User();
        $user->name= 'User'. $i;
        $user->password= bcrypt('qwert');
        $user->email= 'User'.$i.'@user.pl';
        $user->save();
        
        }
        
    }
}
