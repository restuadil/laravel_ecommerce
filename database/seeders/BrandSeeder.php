<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['name' => 'Apple', 'description' => 'Apple', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Apple_logo_black.svg/800px-Apple_logo_black.svg.png'],
            ['name' => 'Samsung', 'description' => 'Samsung', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Samsung_Logo.svg/1200px-Samsung_Logo.svg.png'],
            ['name' => 'Huawei', 'description' => 'Huawei', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Huawei_Logo.svg/1200px-Huawei_Logo.svg.png'],
            ['name' => 'Xiaomi', 'description' => 'Xiaomi', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Xiaomi_logo.svg/1200px-Xiaomi_logo.svg.png'],
            ['name' => 'Google', 'description' => 'Google', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/1200px-Google_%22G%22_Logo.svg.png'],
            ['name' => 'Vivo', 'description' => 'Vivo', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Vivo_logo.svg/1200px-Vivo_logo.svg.png'],
            ['name' => 'Oppo', 'description' => 'Oppo', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/Oppo_logo.svg/1200px-Oppo_logo.svg.png'],
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}
