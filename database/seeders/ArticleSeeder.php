<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();

        Article::create([
            'title' => "Participation as Witness in the Recapitulation of the 2024 National Election Results",
            'slug' => "participation-as-witness-in-the-recapitulation-of-the-2024-national-election-results",
            'content' => "Agenda for March 2, 2024: Witnessing the presidential and vice-presidential candidates in the recapitulation of the national election vote count and the declaration of the 2024 general election results.",
            'header_articles' => 'thumbnail/yfXFqO42JFO3Gg9PWi6MNmVN2iwT9OxbPplWI5EM.png', 
            'status' => 'PUBLISH',
            'category_id' => $categories[0]->id,
        ]);

        Article::create([
            'title' => "Report on Alleged Election Law Violation by Tapanuli Tengah Regional Secretary",
            'slug' => "report-on-alleged-election-law-violation-by-tapanuli-tengah-regional-secretary",
            'content' => "On Tuesday, January 16, 2024, the AMPK team reported the Tapanuli Tengah regional secretary to be a civil servant (ASN), known to have made statements directing ASN within his workplace to support the Nasdem party. This action is deemed to have violated electoral laws, including both the Election Law and the KPU regulations.",
            'header_articles' => 'thumbnail/oRicHsepGrNIUQmlxJxFBnmNe1lz9Ygj2SfJ7Wu4.png', 
            'status' => 'PUBLISH',
            'category_id' => $categories[0]->id,
        ]);

        Article::create([
            'title' => "Witness Testimonies and Delayed Proceedings",
            'slug' => "witness-testimonies-and-delayed-proceedings",
            'content' => "On the agenda of the court session on Monday, February 19, 2024, four out of eight victims who reported the incident were present as witnesses in the Central Jakarta District Court. The scheduled examination agenda, which was supposed to commence around 2:00 PM WIB, could only be conducted starting at 7:00 PM WIB. Currently, the trial proceedings are being held in closed session.",
            'header_articles' => 'thumbnail/iUT6q3IyQ1f8PzsYA7jW0YtkpVUo3V0rhRGBKZoF.png', 
            'status' => 'PUBLISH',
            'category_id' => $categories[1]->id,
        ]);

        Article::create([
            'title' => "Expansion of Witnesses for the Miss Universe Indonesia Victim in the Trial at Central Jakarta District Court",
            'slug' => "expansion-of-witnesses-for-the-miss-universe-indonesia-victim-in-the-trial-at-central-jakarta-district-court",
            'content' => "Expansion of Witnesses for the Miss Universe Indonesia Victim in the Trial at Central Jakarta District Court",
            'header_articles' => 'thumbnail/Gri9vmfCP3MVfkHEjq1JjiHvJq4Nkkuk5Mpi5tug.png', 
            'status' => 'DRAFT',
            'category_id' => $categories[1]->id,
        ]);

    }
}