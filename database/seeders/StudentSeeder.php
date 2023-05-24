<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        // Create sample students
        Student::create([
            'first_name' => 'Rowena',
            'last_name' => 'Bergado',
            'middle_name' => 'Imbang',
            'id_number' => '1010940',
            'section' => 'Scorpio',
            'year_level' => '12',
            'address' => 'P4 Rupagan, Bacolod, Lanao del Norte',
        ]);

        Student::create([
            'first_name' => 'Princess Hannah Djazmine',
            'last_name' => 'Macarambon',
            'middle_name' => 'C.',
            'id_number' => '1010960',
            'section' => 'Scorpio',
            'year_level' => '12',
            'address' => 'Poblacion Kolambugan, Lanao del Norte',
        ]);
        Student::create([
            'first_name' => 'Xyzerlyn',
            'last_name' => 'Celestino',
            'middle_name' => 'S.',
            'id_number' => '1010944',
            'section' => 'Scorpio',
            'year_level' => '12',
            'address' => 'Poblacion Kolambugan, Lanao del Norte',
        ]);
        Student::create([
            'first_name' => 'Shekinah',
            'last_name' => 'Trance',
            'middle_name' => 'G.',
            'id_number' => '1005891',
            'section' => 'Scorpio',
            'year_level' => '12',
            'address' => 'P5 Baybay Kolambugan, Lanao del Norte',
        ]);
        Student::create([
            'first_name' => 'Joana Elizabeth',
            'last_name' => 'Lomoljo',
            'middle_name' => 'M.',
            'id_number' => '1010958',
            'section' => 'Scorpio',
            'year_level' => '12',
            'address' => 'P3 Muntay Kolambugan, Lanao del Norte',
        ]);

        // Add more students as needed
    }
}
