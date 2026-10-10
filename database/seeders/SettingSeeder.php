<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $defaultSettings = [
            // Contact Details
            'phone' => '+91 98765 43210',
            'phone_raw' => '+919876543210',
            'alternate_phone' => '+91 98765 43211',
            'whatsapp_number' => '919876543210',
            'email' => 'info@velorapure.com',
            'support_email' => 'support@velorapure.com',
            'address' => 'Industrial Area, Bottling Plant Boulevard, VELORA Hydration Facility',
            'fssai_license' => '10020011000123',
            'plant_certifications' => 'FSSAI Lic. • BIS IS 14543 • ISO 22000 & 9001',

            // Social Media Links
            'facebook' => 'https://facebook.com/velorapure',
            'instagram' => 'https://www.instagram.com/velorapure',
            'instagram_handle' => '@velorapure',
            'linkedin' => 'https://linkedin.com/company/velorapure',
            'youtube' => 'https://youtube.com/@velorapure',
            'x' => 'https://x.com/velorapure',

            // General Website Information
            'name' => 'VELORA PURE',
            'tagline' => 'PURE BY NATURE 💧 TRUSTED WORLDWIDE',
            'copyright_text' => '© ' . date('Y') . ' VELORA PURE. All Rights Reserved.',
        ];

        foreach ($defaultSettings as $key => $value) {
            Setting::firstOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        Setting::clearCache();
    }
}
