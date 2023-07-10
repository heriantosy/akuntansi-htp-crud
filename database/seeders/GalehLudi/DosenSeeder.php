<?php

namespace Database\Seeders\GalehLudi;

use App\Models\GalehLudi\Dosen;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dosen::factory()->count(10)->create();
    }
}
