<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lang;

class LangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Lang::create([
            'name' => 'English',
            'code' => 'en',
        ]);

        Lang::create([
            'name' => 'Spanish',
            'code' => 'es',
        ]);

        Lang::create([
            'name' => 'French',
            'code' => 'fr'
        ]);
    }
}
