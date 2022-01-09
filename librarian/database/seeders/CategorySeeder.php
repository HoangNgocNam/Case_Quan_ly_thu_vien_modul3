<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category -> name = 'Ký Sự';
        $category -> save();

        $category = new Category();
        $category -> name = 'Văn Hóa';
        $category -> save();

        $category = new Category();
        $category -> name = 'Nhật Ký';
        $category -> save();

        $category = new Category();
        $category -> name = 'Kinh Dị';
        $category -> save();

        $category = new Category();
        $category -> name = 'Kinh Doanh';
        $category -> save();

        $category = new Category();
        $category -> name = 'Pháp Luật';
        $category -> save();

        $category = new Category();
        $category -> name = 'Ẩm Thực';
        $category -> save();
    }
}
