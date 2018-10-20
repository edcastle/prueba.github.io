<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nombres'  => 'Gonzalo',
            'apellidos' => 'García',
            'email' => 'gonzalete@hotmail.com',
            'password' => bcrypt('laravel'),
            'is_admin' => true,
        ]);

        factory(User::class, 35)->create();
    }
}
