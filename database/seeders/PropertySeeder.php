<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    private array $properties = [
      ['title' => 'Цвет'],
      ['title' => 'Диагональ']
    ];

    public function run(): void
    {
        foreach ($this->properties as $property) {
            DB::table('properties')->insert($property);
        }
    }
}
