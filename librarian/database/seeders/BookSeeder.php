<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new Book();
        $book -> name = 'Thế Giới có gì Thần bí';
        $book -> desc = 'Sưu tầm về chuyện ma và khai thác tâm lý';
        $book -> status = 'Cũ';
        $book -> save();

        $book = new Book();
        $book -> name = 'Ngọc Hạp Thông Thư';
        $book -> desc = 'Chọn Ngày cát lợi, Xem Âm Dương Ngũ Hành';
        $book -> status = 'Mới';
        $book -> save();

        $book = new Book();
        $book -> name = 'Địa Lý Tả Ao';
        $book -> desc = 'Kể Về Cuộc Đời Của Một Thánh Nhân Chuyên Tầm Long Mạch';
        $book -> status = 'Cũ';
        $book -> save();

        $book = new Book();
        $book -> name = 'Nhật Ký Đặng Thùy Trâm';
        $book -> desc = 'Viết Về Số Phận Kỳ Lạ Của Một Nữ Liệt Sỹ 27 Tuổi';
        $book -> status = 'Mới';
        $book -> save();
    }
}
