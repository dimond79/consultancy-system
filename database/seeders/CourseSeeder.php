<?php

namespace Database\Seeders;

use App\Models\Course;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Course::create([
        //     'course_name' => 'BIT',
        //     'country' => 'U.S.A'


        // ]);

        DB::table('courses')->insert([
            [
            'course_name' => 'Master in Engineering',
            'country' => 'India'],
            [
            'course_name' => 'Master in Business',
            'country' => 'China'],
            [
            'course_name' => 'Master in AI',
            'country' => 'Australia'],



            ]);
    }
}
