<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // these are admin users
        $users = [
            [
                'name' => 'Cary Huit',
                'password' => bcrypt('client'),
                'email' => 'caryhuit@gmail.com',
                'role' => "client",
                'email_verified_at' => now(),
            ],
        ];

        foreach($users as $user) {
            User::create($user)->assignRole('client');
        }
    }
}
