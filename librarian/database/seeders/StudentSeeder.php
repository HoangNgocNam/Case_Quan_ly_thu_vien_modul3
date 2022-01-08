<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = new Student();
        $student->name = "Mỹ Trần";
        $student->student_code = "09";
        $student->email = "mytran@gmail.com";
        $student->address = "Sài Gòn";
        $student->birthday = "09-11-1996";
        $student->save();

        $student = new Student();
        $student->name = "Hà Thu";
        $student->student_code = "11";
        $student->email = "hathu@gmail.com";
        $student->address = "Phú Thọ";
        $student->birthday = "10-10-2003";
        $student->save();

        $student = new Student();
        $student->name = "Nam Hoàng";
        $student->student_code = "02";
        $student->email = "namhoang@gmail.com";
        $student->address = "Hà Nội";
        $student->birthday = "23-10-1987";
        $student->save();

        $student = new Student();
        $student->name = "Dung Trần";
        $student->student_code = "06";
        $student->email = "dungtran@gmail.com";
        $student->address = "Huế";
        $student->birthday = "27-12-1999";
        $student->save();

        $student = new Student();
        $student->name = "Tuấn Anh";
        $student->student_code = "12";
        $student->email = "tuananh@gmail.com";
        $student->address = "Bắc Ninh";
        $student->birthday = "07-11-2003";
        $student->save();
    }
}
