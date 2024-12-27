<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Home;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Home::create([
            'title' => 'Committed %%to Legal Service',
            'description' => 'We are committed, enthusiastic, and dedicated to providing %%innovative, strategic, and comprehensive legal services.',
            'image' => 'img/home/iqcQinSMo1Bi155gR4UVEADLYN3zoIhpH1Dse3vR.png',
        ]);

        Home::create([
            'title' => 'Problem Solver and %%Deal Maker',
            'description' => 'Paying attention to the specific requirements of each case %%is key to serving the best interests of our clients.',
            'image' => 'img/home/A5lJwOCXVkIlTfPwfUSGadkH1DnAzXfMF5d5DEn3.png',
        ]);

        Home::create([
            'title' => 'Superior in Dispute %%Resolution',
            'description' => 'We excel in resolving disputes, including negotiations, %%debt restructuring, and court litigation.',
            'image' => 'img/home/RkWfoa0POleisuvQmoa0HZIfCOOhRspiBGamhbIK.png',
        ]);
        
        Home::create([
            'title' => 'Detailed Chronology',
            'description' => 'Pay attention to the clients chronological explanation of the main issue at hand. Describing the issue as a factor in decision-making.',
            'image' => 'img/home/y6S3K42fA27anTqgTVOAbdw4WxbaK7QjXKnd5SOt.png',
        ]);

        Home::create([
            'title' => 'Discussion',
            'description' => 'This conversation is to decide what the first steps should be in pursuing this matter. In this discussion, step effectiveness is also significantly weighted.',
            'image' => 'img/home/kuC6f3zVxq0TR0v9NA3Awrb4OSzMJ0S2x1faKNYX.png',
        ]);

        Home::create([
            'title' => 'File Preparations',
            'description' => 'Following the equivalence of all senses. In compliance with current legal guidelines, all documentsrequi red for the procedure will be created.',
            'image' => 'img/home/GZDWK2Kf3tJwOSyppMikZbTQxLQe3NITx8Mb5kHx.png',
        ]);
    }
}