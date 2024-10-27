<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Johan Chate',
            'email' => 'soytcljohant@gmail.com',
            'password' => Hash::make('#%J.A.C.A88'),
        ]);
        foreach (range(1, 10) as $i) {
            User::insert([
                'name' => 'Test User '.$i,
                'email' => 'test@example'.$i.'.com',
                'password' => Hash::make('password'.$i),
            ]);
        }
        $this->call([
            CategoriesTableSeeder::class,
        ]);
    }
}
