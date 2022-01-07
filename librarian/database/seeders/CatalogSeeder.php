<?php

namespace Database\Seeders;

use App\Models\Catalog;
use Illuminate\Database\Seeder;

class CatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $catalog = new Catalog();
       $catalog -> code = 'd234a';
       $catalog -> name = 'Trinh Thám';
       $catalog -> save();

        $catalog = new Catalog();
        $catalog -> code = 'd455w';
        $catalog -> name = 'Cậu bé bút chì';
        $catalog -> save();

        $catalog = new Catalog();
        $catalog -> code = 'd267e';
        $catalog -> name = 'Hexman';
        $catalog -> save();

        $catalog = new Catalog();
        $catalog -> code = 'd244u';
        $catalog -> name = 'Văn Học';
        $catalog -> save();

        $catalog = new Catalog();
        $catalog -> code = 'd234a';
        $catalog -> name = 'Thiên văn học';
        $catalog -> save();
    }
}
