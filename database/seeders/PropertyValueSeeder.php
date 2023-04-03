<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PropertyValueSeeder extends Seeder
{
    private array $values = [
        [
            'value' => 'Красный',
            'property_id' => 1
        ],
        [
            'value' => 'Зеленый',
            'property_id' => 1
        ],
        [
            'value' => 'Синий',
            'property_id' => 1
        ],
        [
            'value' => '15.6',
            'property_id' => 2
        ],
        [
            'value' => '17.3',
            'property_id' => 2
        ]
    ];

    public function run(): void
    {
        foreach ($this->values as $value) {
            DB::table('property_values')->insert($value);
        }
    }
}
