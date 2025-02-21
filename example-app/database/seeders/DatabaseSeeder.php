<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $user = new User();
        // $user->name = 'alimomichis';
        // $user->email = 'momichis@gmail.com';
        // $user->password = bcrypt('12345678');
        // $user->save();
        
        // factory lo que hace es generar de forma aleatoria registros en la tabla definida en la base de datos, en este caso posts y users
        $this->call(UserSeeder::class); 
        Post::factory(100)->create();
        User::factory(10)->create();
    }
}
