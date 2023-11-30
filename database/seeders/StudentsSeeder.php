<?php

namespace Database\Seeders;

use illuminate\Database\Console\Seeds\WithoutMode1Events;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            ['name'=>'Deyasmei','id_course'=>21,'age'=>19,'classroom'=>'Kelas A'],
            ['name'=>'Mei','id_course'=>22,'age'=>20,'classroom'=>'Kelas B'],
            ['name'=>'Deyas','id_course'=>22,'age'=>21,'classroom'=>'Kelas C'],
            ['name'=>'Asmi','id_course'=>23,'age'=>22,'classroom'=>'Kelas D'],
            ['name'=>'Ami','id_course'=>21,'age'=>23,'classroom'=>'Kelas E']
        ]);
    }
}
