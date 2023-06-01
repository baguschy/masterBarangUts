<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;
use Faker\Factory;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');

        Item::query()->create([
            'unit_id' => 1,
            'code' => 'B-721',
            'name' => 'Monitor',
            'price' => 2500000,
            'desc' => $faker->text(200),
            'stock' => 98
        ]);

        Item::query()->create([
            'unit_id' => 2,
            'code' => 'B-722',
            'name' => 'Kursi Gaming MX-300',
            'price' => 500000,
            'desc' => $faker->text(200),
            'stock' => 198
        ]);

        Item::query()->create([
            'unit_id' => 3,
            'code' => 'B-723',
            'name' => 'Speaker Komputer ACER',
            'price' => 300000,
            'desc' => $faker->text(200),
            'stock' => 88
        ]);

        Item::query()->create([
            'unit_id' => 11,
            'code' => 'B-724',
            'name' => 'Kertas Glossy',
            'price' => 250000,
            'desc' => $faker->text(200),
            'stock' => 218
        ]);

        Item::query()->create([
            'unit_id' => 1,
            'code' => 'B-725',
            'name' => 'Proyektor',
            'price' => 1200000,
            'desc' => $faker->text(200),
            'stock' => 150
        ]);
    }
}
