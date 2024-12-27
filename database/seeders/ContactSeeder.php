<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'location' => 'Jl. Pam Baru Raya No. 1B Bendungan Hilir, Tanah abang, Jakarta Pusat',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d795.3538284686424!2d106.81110142400064!3d-6.203425158105109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1714577497825!5m2!1sid!2sid',
            'email' => 'yupen78hadi@gmail.com',
            'phone' => '+62 811 9877 078',
            'instagram' => 'yhp_lawfirm',
        ]);
    }
}