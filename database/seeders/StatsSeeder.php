<?php

namespace Database\Seeders;

use App\Models\Stat;
use Illuminate\Database\Seeder;

class StatsSeeder extends Seeder
{
    public function run(): void
    {
        $stats = [
            ['label' => 'Years of Experience', 'value' => '17', 'suffix' => '+', 'icon' => 'calendar', 'sort_order' => 1],
            ['label' => 'Happy Patients', 'value' => '200000', 'suffix' => '+', 'icon' => 'smile', 'sort_order' => 2],
            ['label' => 'Bedded Hospital', 'value' => '50', 'suffix' => '', 'icon' => 'bed', 'sort_order' => 3],
            ['label' => 'Master Certifications', 'value' => '26', 'suffix' => '', 'icon' => 'certificate', 'sort_order' => 4],
            ['label' => 'Dedicated Staff', 'value' => '50', 'suffix' => '+', 'icon' => 'users', 'sort_order' => 5],
        ];

        foreach ($stats as $stat) {
            Stat::updateOrCreate(['label' => $stat['label']], $stat);
        }
    }
}
