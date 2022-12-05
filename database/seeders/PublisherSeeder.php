<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            'name' => 'CH',
            'address' => 'Jl. Benton SPM No.5 Kota Tangerang, Banten',
            'phone' => '0812440027303',
            'email' => 'ch@webprogramming.com',
            'image' => 'storage/images/Coolen Hover Logo.jpg',
        ]);
        DB::table('publishers')->insert([
            'name' => 'Barbie Universe',
            'address' => 'Jl. Karawaci SPM No.6 Kota Tangerang, Banten',
            'phone' => '0812540027303',
            'email' => 'barbieuniverse@webprogramming.com',
            'image' => 'storage/images/Barbie Logo.jpg',
        ]);
        DB::table('publishers')->insert([
            'name' => 'RK',
            'address' => 'Jl. Lippo SPM No.7 Kota Tangerang, Banten',
            'phone' => '0812640027303',
            'email' => 'rk@webprogramming.com',
            'image' => 'storage/images/Rupi Kaur Logo.jpg',
        ]);
    }
}
