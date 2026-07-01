<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            'site_name'         => 'Bilal Hospital',
            'site_tagline'      => 'Improving quality of your life by delivering excellence in healthcare',
            'site_email'        => 'info@bilal-hospital.com',
            'site_phone'        => '9699911101',
            'site_phone_2'      => '9867934366',
            'site_tel_1'        => '022-25351500',
            'site_tel_2'        => '022-25354111',
            'site_tel_3'        => '022-25356070',
            'emergency_number'  => '9699911101',
            'icu_helpline'      => '9819494485',
            'maternity_helpline'=> '9619252425',
            'site_address'      => '1st Floor, A Wing, Royal Garden, Old Mumbai-Pune Road, Near Shimla Park, Mumbra, Thane - 400612',
            'site_city'         => 'Mumbra, Thane',
            'site_state'        => 'Maharashtra',
            'site_pincode'      => '400612',
            'working_hours'     => '24×7',
            'facebook_url'      => 'https://facebook.com/bilalhospital',
            'instagram_url'     => 'https://instagram.com/bilalhospital',
            'twitter_url'       => 'https://twitter.com/bilalhospital',
            'whatsapp_number'   => '919699911101',
            'google_maps_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.897!2d73.0173!3d19.1811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDEwJzUyLjAiTiA3M8KwMDEnMDIuMyJF!5e0!3m2!1sen!2sin!4v1000000000',
            'meta_title'        => 'Bilal Hospital - 50 Bedded Multispecialty Hospital in Mumbra, Thane',
            'meta_description'  => 'Bilal Hospital is a 50-bedded multispecialty hospital in Mumbra, Thane with well-equipped ICU, NICU, OT and diagnostic centre. ISO 9001:2015 & NABH Pre-Accredited.',
            'hero_slide_1_heading'    => 'Your Health, Our Priority',
            'hero_slide_1_subheading' => 'World-class healthcare at the heart of Mumbra',
            'hero_slide_2_heading'    => 'Expert Care, Compassionate Doctors',
            'hero_slide_2_subheading' => '50-Bedded Multispecialty Hospital with Advanced Facilities',
            'hero_slide_3_heading'    => '24×7 Emergency & Critical Care',
            'hero_slide_3_subheading' => 'ISO 9001:2015 Certified | NABH Pre-Accredited Hospital',
        ];

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }
    }
}
