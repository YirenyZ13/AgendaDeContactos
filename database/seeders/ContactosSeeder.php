<?php

namespace Database\Seeders;

use App\Models\Contactos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Contactos::factory(100)->create();
    }
}
