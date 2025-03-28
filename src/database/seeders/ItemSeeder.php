<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach(range(1,10) as $index) {
            Item::factory()->create([
                'name' => 'テスト商品'.$index, // インデックス番号を使用
                'memo' => 'テスト商品のメモ'.Str::random(10),
                'price' => mt_rand(1000, 10000),
                'is_selling' => rand(0, 1), // true/falseをランダムに設定
            ]);
        }
    }
}
