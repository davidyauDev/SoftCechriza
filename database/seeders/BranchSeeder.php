<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Branch;

class BranchSeeder extends Seeder
{
    public function run(): void
    {
        $branches = [
            // BCP (client_id = 1)
            [
                'name' => 'BCP Norte Trujillo',
                'city' => 'Trujillo',
                'address' => 'Av. América Norte 123',
                'client_id' => 1,
            ],
            [
                'name' => 'BCP Centro Trujillo',
                'city' => 'Trujillo',
                'address' => 'Jr. Pizarro 456',
                'client_id' => 1,
            ],
            [
                'name' => 'BCP Surco',
                'city' => 'Lima',
                'address' => 'Av. Caminos del Inca 101',
                'client_id' => 1,
            ],

            // Interbank (client_id = 2)
            [
                'name' => 'Interbank La Esperanza',
                'city' => 'Trujillo',
                'address' => 'Av. José María Eguren 234',
                'client_id' => 2,
            ],
            [
                'name' => 'Interbank El Porvenir',
                'city' => 'Trujillo',
                'address' => 'Av. 28 de Julio 456',
                'client_id' => 2,
            ],
        ];

        foreach ($branches as $branch) {
            Branch::create($branch);
        }
    }
}
