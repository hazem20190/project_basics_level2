<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate(['id' => 1], [
            'address'   => '123 Main Street',
            'phone'     => '+201234567890',
            'email'     => 'info@example.com',
            'facebook'  => 'https://facebook.com/example',
            'twitter'   => 'https://twitter.com/example',
            'yotube'   => 'https://youtube.com/example',
            'linkedin'  => 'https://linkedin.com/example',
            'instagram' => 'https://instagram.com/example',
        ]);
    }
}
