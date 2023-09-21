<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produits')->insert([
            ['nom' => 'Pomme', 'prix' => 1.50, 'quantite' => 3],
            ['nom' => 'Poires', 'prix' => 2.50, 'quantite' => 5],
            ['nom' => 'Bananes', 'prix' => 1.00, 'quantite' => 2],
            ['nom' => 'Oranges', 'prix' => 1.50, 'quantite' => 4],
            ['nom' => 'Mangues', 'prix' => 2.00, 'quantite' => 1],
            ['nom' => 'Papayes', 'prix' => 2.50, 'quantite' => 2],
            ['nom' => 'Fraises', 'prix' => 3.00, 'quantite' => 3],
            ['nom' => 'Framboises', 'prix' => 3.50, 'quantite' => 4],
            ['nom' => 'Myrtilles', 'prix' => 4.00, 'quantite' => 5],
            ['nom' => 'Cerises', 'prix' => 4.50, 'quantite' => 6]
        ]);
    }
}
