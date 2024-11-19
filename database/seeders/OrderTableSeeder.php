<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Orders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [
            "Service Agreement",
            "Partnership Agreement",
            "Non-Disclosure Agreement (NDA)",
            "Employment Contract",
            "Independent Contractor Agreement",
            "Confidentiality Agreement",
            "Joint Venture Agreement",
            "Sales Agreement",
            "Lease Agreement",
            "Licensing Agreement",
            "Vendor Agreement",
            "Distributor Agreement",
            "Sales Commission Agreement",
            "Supply Chain Agreement",
            "Purchase Agreement",
            "Wholesale Agreement",
            "Dropshipping Agreement",
            "Franchise Agreement",
            "Marketing Services Agreement",
            "Product Development Agreement",
            "Intellectual Property Transfer Agreement",
            "Trademark Licensing Agreement",
            "Software Development Agreement",
            "Content Licensing Agreement",
            "Patent Licensing Agreement",
            "Copyright Assignment Agreement",
            "SaaS Agreement",
            "White-Label Agreement",
            "Technology Transfer Agreement",
            "Research and Development Agreement",
            "Loan Agreement",
            "Investment Agreement",
            "Shareholder Agreement",
            "Equity Purchase Agreement",
            "Convertible Note Agreement",
            "Revenue-Sharing Agreement",
            "Debt Settlement Agreement",
            "Stock Option Agreement",
            "Profit-Sharing Agreement",
            "Payment Processing Agreement",
            "Maintenance Agreement",
            "Logistics Agreement",
            "Equipment Rental Agreement",
            "Transportation Agreement",
            "Facility Management Agreement",
            "Warehousing Agreement",
            "Security Services Agreement",
            "Cleaning Services Agreement",
            "Utility Services Agreement",
            "Fleet Management Agreement"
          ];

          foreach ($orders as $order) {
            Order::create(['type' => $order]);
          }
    }
}
