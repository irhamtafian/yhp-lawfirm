<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Partner;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partner::create([
            'name' => 'Yupen Hadi, S.H., M.H.',
            'position' => 'Managing Partners',
            'description' => 'Advocate, Corporate Law, Energy and Minning Law, Immigration Law, Risk Assesment, Risk Management, Labour Law.',
            'image' => 'img/partners/RFoLIOPabE1k3jT9ikCQLbiaGxpqfy6sLNsrv5PM.png',
        ]);

        Partner::create([
            'name' => 'Rivaldi, S.H., M.H.',
            'position' => 'Senior Partners',
            'description' => 'Receiver and Managers in the field of Bankuptcy, Tax Law, Judicial Reviews, Disputes over General Election Results, Corporations Law, Land law, Environment Law.',
            'image' => 'img/partners/MPnDvPQCPrR84Fy7vlBoorNWIxHoFOtf7Hs867nS.png',
        ]);
        
        Partner::create([
            'name' => 'Deski Satria, S.H.',
            'position' => 'Partners',
            'description' => 'Advocate, Corporate Law, Energy and Minning Law, Immigration Law, Risk Assesment, Risk Management, Labour Law.',
            'image' => 'img/partners/eby1n46WV7162b4XJm5AU5Gtp4XV2Z3qM9jutpnQ.png',
        ]);

        Partner::create([
            'name' => 'Feri Irawan, S.H.',
            'position' => 'Partners',
            'description' => 'Advocate, Fintach Law, Customer Finance Law, Labour Law. %% %% %%',
            'image' => 'img/partners/0y5aPzbPQiBKPq5poxvvhG11tAvcm6sZv4rsuI3S.png',
        ]);

        Partner::create([
            'name' => 'Erwin Edison, S.H.',
            'position' => 'Partners',
            'description' => 'Advocate, Land Law, Property Law, Construction Law, Labour Law. %% %% %%',
            'image' => 'img/partners/lfpNFMJSp7Mm2ozjOM1ZilT36MP14T2bXZBit5Px.png',
        ]);
    }
}