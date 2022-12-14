<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'password' => bcrypt('detective'),
                'email' => 'admin@gmail.com',
                'role' => "detective",
                'email_verified_at' => now(),
            ],
        ];

        foreach($users as $user) {
            User::create($user)->assignRole('detective');
        }
    }
}
