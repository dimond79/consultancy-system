<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create([
            'name' => 'dimond',
            'mobile' => '98655255',
            'email'=> 'dimond@gmail.com',
            'education' => 'Bachelor',
            'course_id' => '1',
            'percentage'=>'96',
            'age'=>'22',
            'status' => '1',
            'message' => 'I want to study in U.S.A.'
        ]);
    }
}
