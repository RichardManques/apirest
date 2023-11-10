<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Costumer;

class CostumerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Costumer::factory()
            ->count(25)
            ->hasInvoices(10)
            ->create();
        Costumer::factory()
            ->count(100)
            ->hasInvoices(2)
            ->create();
        Costumer::factory()
            ->count(100)
            ->hasInvoices(8)
            ->create();
        Costumer::factory()
            ->count(5)
            ->create();
    }
}
