<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'title' => 'Civil and Criminal Litigation',
            'description' => 'YUPEN HADI & PARTNERS law firm, place a strong emphasis on enforcement the highest ethical standards when advocating our clients, both in courtrooms and arbitration proceedings in Indonesia. Our experienced litigation team consistently serves as legal representatives, whether our clients are initiating legal actions or responding to legal challenges. Furthermore, we expand our expertise in completion of dispute solution to provide comprehensive guidance for our clients. We are committed to ensuring our clients interests are protected while maintaining the highest integrity throughout the legal process.',
        ]);

        Service::create([
            'title' => 'Debt Restructuring and Bankruptcy',
            'description' => 'Debt restructuring and bankruptcy are crucial practice areas that address financial difficulties, manage debt obligations, and seek solutions for individuals and businesses facing financial challenges. At YUPEN HADI & PARTNERS Law Firm, we specialize in providing strategic legal advice and guidance in debt restructuring and bankruptcy matters, assisting clients in navigating complex financial situations and finding sustainable solutions. Debt Restructuring: Debt restructuring involves renegotiating the terms of existing debt to alleviate financial burdens and provide a pathway for repayment. The aim is to restructure debt obligations, such as loans, bonds, or other financial arrangements, to make them more manageable for the debtor while still considering the interests of creditors. Debt restructuring may involve various strategies, such as extending the repayment period, lowering interest rates, or modifying contract arrangements.',
        ]);

        Service::create([
            'title' => 'Land Dispute',
            'description' => 'The lawyers at YUPEN HADI & PARTNERS specialize in resolving land dispute cases. The innovative concepts and strategies we possess have been proven successful by our clients, ranging from individuals and corporations to state-owned enterprises (BUMN). With the experience and expertise we have in resolving land issues, we believe that your land dispute, under our handling snf resolved optimally using our methods, techniques, and experience.',
        ]);

        Service::create([
            'title' => 'Contract Drafting',
            'description' => 'At YUPEN HADI & PARTNERS, we assist our clients through every stage of their business, from negotiations, preparation, contract drafting, review, to implementation. Our lawyers will ensure that you achieve the best outcomes, whether its a straightforward or a highly complex collaboration agreement.',
        ]);

        Service::create([
            'title' => 'Labor Law',
            'description' => 'YUPEN HADI & PARTNERS has an excellent track record in representing individual and business clients. We handle various issues related to labor law in Indonesia, such as employment contracts, termination of employment, foreign labor, and corporate actions regarding termination of employment. We will draft the best contracts and engage in negotiation, mediation, and court proceedings as needed to address your labor law issues effectively.',
        ]);
    }
}