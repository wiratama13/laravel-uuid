<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->truncate();

        $data = ['ave','andy','law'];

        foreach ($data as $value) {
            Student::create([
                'id' => Str::uuid(),
                'name' => $value
            ]);
        }
    }
}
