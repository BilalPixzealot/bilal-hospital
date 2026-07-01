<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialsSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            ['patient_name' => 'Ahmed Gaziani', 'review' => 'Good facility, good doctors, good staff. Highly professional.', 'rating' => 5, 'source' => 'Google'],
            ['patient_name' => 'Nargis Ali', 'review' => 'Visited and very satisfied with the services rendered. Professional staff, Reasonable Rates and hygienic environment.', 'rating' => 5, 'source' => 'Google'],
            ['patient_name' => 'Sayali Thorat', 'review' => 'My relative was admitted for 8 days. Case was critical but ICU doctors and all team did an excellent job. This hospital gives the best treatment.', 'rating' => 5, 'source' => 'Google'],
        ];

        foreach ($testimonials as $t) {
            Testimonial::updateOrCreate(['patient_name' => $t['patient_name']], array_merge($t, ['is_active' => true]));
        }
    }
}
