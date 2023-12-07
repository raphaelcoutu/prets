<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory()->create([
            'name' => 'F. Maltais',
            'banner' => 'Jean Coutu'
        ]);

        Client::factory()->create([
            'name' => 'M. Bourque',
            'banner' => 'Pharmaprix'
        ]);
    }
}
