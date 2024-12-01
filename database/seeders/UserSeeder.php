<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = new User();
        $user->name = 'Victor Arana';
        $user->email = 'victo@gmail.com';
        $user->password = bcrypt('1234568');

        $user->save();
        $user = new User();
        $user->name = 'Jonathan';
        $user->email = 'jonao@gmail.com';
        $user->password = bcrypt('1234568');

        $user->save();
    }
}
