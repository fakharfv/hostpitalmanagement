<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
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
         User::create([
            'username' => "admin@admin.com",
            'first_name' => 'admin',
            'last_name' => 'test',
            'email' => 'admin@admin.com',
            'password' => bcrypt('@#admin'),
            'phone' => '09912434',
            'gender' => "male",
            'dob' => '1994-10-02',
         ]);
    }
}
