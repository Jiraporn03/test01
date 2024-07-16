<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('provinces')->insert([
            [
                'name' => "น่าน",
                'created_at' => now(),
                'region_id'=>'1',
            ],
            [
                'name' => "เชียงใหม่",
                'created_at' => now(),
                'region_id'=>'1',
            ],
            [
                
                'name' => "คะยา",
                'created_at' => now(),
                'region_id'=>'2',
            ],
             [   
                'name' => "ย่างกุ้ง",
                'created_at' => now(),
                'region_id'=>'2',
            ],
            [
                'name' => "จ่าวิญ",
                'created_at' => now(),
                'region_id'=>'3',
            ],
            [
                'name' => "ฮานอย",
                'created_at' => now(),
                'region_id'=>'3',
            ],
            [
                'name' => "โซล",
                'created_at' => now(),
                'region_id'=>'4',
            ],
            [
                'name' => "ปูซาน",
                'created_at' => now(),
                'region_id'=>'4',
            ],
            [
                'name' => "โตเกียว",
                'created_at' => now(),
                'region_id'=>'5',
            ],
            [
                'name' => "ฮกไกโด",
                'created_at' => now(),
                'region_id'=>'5',
            ],
    
        ]);
    }
}