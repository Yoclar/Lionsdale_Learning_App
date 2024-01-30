<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        School::create([
            'name' => 'BMSZC Bláthy Ottó Titusz Informatikai Technikum',
            'address'=> '1032 Budapest, Bécsi út 134',
            'contactname'=> 'Krucsay Attila',
            'contactemail' => 'krucsay.attila@blathy.com'

        ]);

        School::create([
            'name' => 'BGSZC Eötvös Loránd Technikum',
            'address'=> '1204 Budapest, Török Flóris u. 89',
            'contactname'=> 'Szénásy Zsolt',
            'contactemail' => 'szenasyzsolt​@elg-bp.edu.hu'

        ]);

        School::factory(1)->create();

    }
}
