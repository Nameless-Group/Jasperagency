<?php

namespace Database\Seeders;

use App\Models\Home\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $packages = [
            [
                'name' => 'Basic Package',
                'details' => ''
            ],
            [
                'name' => 'Regular Package',
                'details' => ''
            ],
            [
                'name' => 'Golden Package',
                'details' => ''
            ]
        ];

        foreach ($packages as $package) {
            Package::query()->create($package);
        }
    }
}
