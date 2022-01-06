<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();
        $user->name = "Nam";
        $user->email = "nam@gmail.com";
        $user->password=Hash::make('123456');
        $user->phone = "0123456789";
        $user->save();

        $user = new User();
        $user->name = "Ha";
        $user->email = "ha@gmail.com";
        $user->password=Hash::make('123456');
        $user->phone = "0123456789";
        $user->save();
    }
}
