<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $type = [
            [
                'name' => 'asus',
            ],
            [
                'name' => 'acer',
            ],
            [
                'name' => 'hp',
            ],
            [
                'name' => 'msi',
            ],
            [
                'name' => 'razer',
            ],
            [
                'name' => 'samsung',
            ],
        ];
        foreach ($type as $key => $type) {
            Type::create($type);
        }
    }
}
