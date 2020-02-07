<?php

use App\User;
use \Illuminate\Support\Facades\Hash;
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
        $user = User::where('email', 'user@1user.com')->first();

        if (!$user) {
            User::create([
                'name' => 'Katey Litz',
                'email' => 'user@1user.com',
                'role' => 'admin',
                'password' => Hash::make('password')
            ]);
        }
    }
}
