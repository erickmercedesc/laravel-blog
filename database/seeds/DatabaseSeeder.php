<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        App\User::create([
            'name'=>'Erick Mercedes',
            'email'=>'erick@mail.com',
            'password'=>bcrypt('Erick123')
        ]);

        factory(App\Post::class, 24)->create();
    }
}
