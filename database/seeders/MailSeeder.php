<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mail;

class MailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create example mails
        Mail::create([
            'name' => 'Irham',
            'email' => 'irhamtafianazral@gmail.com',
            'message' => 'Impresif!',
        ]);

        Mail::create([
            'name' => 'Rivaldi Guci',
            'email' => 'rivaldi@gmail.com',
            'message' => 'Amazing!',
        ]);

    }
}