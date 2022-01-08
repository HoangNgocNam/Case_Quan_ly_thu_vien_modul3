<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publisher = new Publisher();
        $publisher->name = 'Nhà Xuất Bản Văn Hóa Dân Tộc';
        $publisher->save();

        $publisher = new Publisher();
        $publisher->name = 'Nhà Xuất Bản Hồng Đức';
        $publisher->save();

        $publisher = new Publisher();
        $publisher->name = 'Nhà Xuất Bản Hà Nội';
        $publisher->save();

        $publisher = new Publisher();
        $publisher->name = 'Nhà Xuất Bản Kim Đồng';
        $publisher->save();

        $publisher = new Publisher();
        $publisher->name = 'Nhà Xuất Bản Thanh Hóa';
        $publisher->save();

        $publisher = new Publisher();
        $publisher->name = 'Nhà Xuất Bản Thanh Niên';
        $publisher->save();

        $publisher = new Publisher();
        $publisher->name = 'Nhà Xuất Bản Hải Phòng';
        $publisher->save();

        $publisher = new Publisher();
        $publisher->name = 'Nhà Xuất Bản Đà Nẵng';
        $publisher->save();
    }
}
