<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = [
            ["name" => "Vertex Ventures", "email" => "info@vertexventures.com"],
            ["name" => "Pinnacle Partners", "email" => "contact@pinnaclepartners.com"],
            ["name" => "Elevate Enterprises", "email" => "support@elevateenterprises.com"],
            ["name" => "Summit Solutions", "email" => "hello@summitsolutions.com"],
            ["name" => "Aspire Alliance", "email" => "team@aspirealliance.com"],
            ["name" => "Nexus Growth", "email" => "growth@nexusgrowth.com"],
            ["name" => "Momentum Matrix", "email" => "info@momentummatrix.com"],
            ["name" => "Infinity Innovations", "email" => "support@infinityinnovations.com"],
            ["name" => "Prime Pathway", "email" => "contact@primepathway.com"],
            ["name" => "Catalyst Co.", "email" => "info@catalystco.com"],
            ["name" => "Vanguard Vision", "email" => "vision@vanguardvision.com"],
            ["name" => "Beacon Bridge", "email" => "hello@beaconbridge.com"],
            ["name" => "Thrive Collective", "email" => "team@thrivecollective.com"],
            ["name" => "Apex Advisory", "email" => "contact@apexadvisory.com"],
            ["name" => "Momentum Makers", "email" => "makers@momentummakers.com"],
            ["name" => "Evolve Edge", "email" => "info@evolveedge.com"],
            ["name" => "Omni Orbit", "email" => "orbit@omniorbit.com"],
            ["name" => "Paramount Progress", "email" => "progress@paramountprogress.com"],
            ["name" => "Nova Nexus", "email" => "support@novanexus.com"],
            ["name" => "Skyline Strategies", "email" => "info@skylinestrategies.com"],
        ];
        

        foreach ($companies as $company) {
            Company::create(['name' => $company['name'], 'email' => $company['email']]);
        }
    }
}
