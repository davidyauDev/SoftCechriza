<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            [
                'name' => 'Banco de Crédito del Perú (BCP)',
                'email' => 'contacto@bcp.com.pe',
                'phone' => '011-500-1234',
            ],
            [
                'name' => 'Interbank',
                'email' => 'soporte@interbank.pe',
                'phone' => '011-500-5678',
            ],
            [
                'name' => 'Scotiabank Perú',
                'email' => 'info@scotiabank.pe',
                'phone' => '011-500-7890',
            ],
            [
                'name' => 'BBVA Perú',
                'email' => 'atencion@bbva.pe',
                'phone' => '011-500-2468',
            ],
        ];

        foreach ($clients as $client) {
            Client::create($client);
        }
    }
}
