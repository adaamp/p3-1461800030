<?php

namespace Database\Seeders;

use App\Models\Apotik;
use Illuminate\Database\Seeder;

class ApotikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apk1 = new Apotik();
        $apk1->kode_obat = "0001";
        $apk1->nama_obat = "Adam";
        $apk1->save();
    }
}
