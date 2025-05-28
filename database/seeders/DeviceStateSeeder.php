<?php

namespace Database\Seeders;

use App\Models\device_state;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeviceStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        device_state::create([
            'name' => 'Broken'
        ]);
    }
}
