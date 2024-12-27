<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutUs;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutUs::create([
            'title' => 'Established in 2017 by %%Yupen Hadi',
            'description' => 'YUPEN HADI & PARTNERS was established in 2017 by Yupen Hadi as a multi-practice law firm in Indonesia. Committed, enthusiastic, and dedicated to providing innovative, strategic, and comprehensive legal services. %%YUPEN HADI & PARTNERS is known for maintaining the highest professional standards in its business. This is achieved by consistently applying the most effective and best legal solutions, ensuring timeliness, and without ignoring commercial aspects.',
            'image' => 'img/about-us/khoSAxGpz1MNphzOh1ttgMyhZx4WAIogt3GPl7aR.png',
        ]);

        AboutUs::create([
            'title' => 'A Great Problem Solver and %%Deal Maker',
            'description' => 'YUPEN HADI & PARTNERS is a great problem solver and dealmaker. We believe that the combination of our lawyers analytical skills and our personalized approach, taking into account the specific requirements of each case, is the key to serving the best interests of our clients. %%YUPEN HADI & PARTNERS specializes in various comprehensive legal services and has offered its expertise in various corporate legal matters and commercial disputes.',
            'image' => 'img/about-us/OpPh7baET6zMkH4i4bcTLd0gAbFGThpxwX9GXRk7.png',
        ]);

        AboutUs::create([
            'title' => 'Superior in Dispute %%Resolution',
            'description' => 'YUPEN HADI & PARTNERS is superior in dispute resolution, including negotiations, debt restructuring, and court litigation. Our respected clients include state-owned enterprises, regional enterprises, government institutions, start-up companies, digital and fin-tech companies, and many others of famous person.',
            'image' => 'img/about-us/OpPh7baET6zMkH4i4bcTLd0gAbFGThpxwX9GXRk7.png',
        ]);
    }
}