<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $collectUnit = [
            'Unit',
            'Buah',
            'Pasang',
            'Lembar',
            'Keping',
            'Batang',
            'Bungkus',
            'Potong',
            'Tablet',
            'Ekor',
            'Rim',
            'Karat',
            'Botol',
            'Butir',
            'Roll',
            'Dus',
            'Karung',
            'Koli',
            'Sak',
            'Bal',
            'Kaleng',
            'Set',
            'Slop',
            'Gulung',
            'Ton',
            'KiloGram',
            'Gram',
            'MiliGram',
            'Meter',
            'M2',
            'M3',
            'Inchi',
            'CC',
            'Liter'
        ];

        foreach ($collectUnit as $key => $name) {
            Unit::query()->create([
                'code' => $key+1,
                'name' => $name
            ]);
        }

    }
}
