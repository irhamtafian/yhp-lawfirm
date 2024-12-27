<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OurClient;

class OurClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OurClient::create([
            'title' => 'Corporate',
            'description' => '- BSF VENTURE (Malaysia) - PT. Gihon Telekomunikasi Indonesia - PT. Global Barat Digital - PT. Sarana Niaga Jaya - PT. Indomesin Tridaya Bangsa - PT. Bianglala Metro Politan - PT. Alexa Putra Pratama - PT. Saka Ruang Indonesia - PT. Rumah Visual Manta Imaji',
        ]);

        OurClient::create([
            'title' => 'Pemda',
            'description' => '- Pemda DKI Jakarta - Pemda Provinsi Kalimantan Utara - Pemda Provinsi Kalimantan Selatan - Pemda Provinsi Sulawesi Tenggara - Pemda Kabupaten Konawe.',
        ]);

        OurClient::create([
            'title' => 'Other',
            'description' => 'And many other clients that we cannot mention for privacy reasons, including individual clients.',
        ]);
    }
}