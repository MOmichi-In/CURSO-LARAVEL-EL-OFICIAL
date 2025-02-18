<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $user = new User();
        $user->name = 'alimomichis';
        $user->email = 'momichis@gmail.com';
        $user->password = bcrypt('12345678');
        $user->save();
    }
}
