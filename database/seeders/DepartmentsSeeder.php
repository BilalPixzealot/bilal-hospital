<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DepartmentsSeeder extends Seeder
{
    public function run(): void
    {
        $departments = [
            ['name' => 'ICU & General Medicine', 'icon' => 'heart-pulse', 'short_description' => 'Advanced Intensive Care Unit with 24×7 critical care specialists and general medicine consultants.', 'sort_order' => 1],
            ['name' => 'Maternity & Obstetrics', 'icon' => 'baby', 'short_description' => 'Comprehensive maternity care with skilled obstetricians ensuring safe delivery for mother and child.', 'sort_order' => 2],
            ['name' => 'Gynaecology', 'icon' => 'ribbon', 'short_description' => 'Complete women\'s health services including routine gynaecological care, diagnostics and treatment.', 'sort_order' => 3],
            ['name' => 'Infertility', 'icon' => 'seedling', 'short_description' => 'Advanced infertility treatments and assisted reproductive technologies to help couples conceive.', 'sort_order' => 4],
            ['name' => 'Laparoscopy & Endoscopy', 'icon' => 'microscope', 'short_description' => 'Minimally invasive surgical procedures for faster recovery and reduced post-operative pain.', 'sort_order' => 5],
            ['name' => 'NICU', 'icon' => 'baby-carriage', 'short_description' => 'Neonatal Intensive Care Unit equipped for premature and critically ill newborns requiring specialized care.', 'sort_order' => 6],
            ['name' => 'Pediatrics', 'icon' => 'child', 'short_description' => 'Comprehensive healthcare for children from newborns to adolescents by experienced pediatricians.', 'sort_order' => 7],
            ['name' => 'General Surgery', 'icon' => 'scalpel', 'short_description' => 'Expert surgical care for a wide range of conditions including laparoscopic and open surgeries.', 'sort_order' => 8],
            ['name' => 'Orthopedic Surgery', 'icon' => 'bone', 'short_description' => 'Specialized care for bone, joint, and musculoskeletal conditions including joint replacement surgery.', 'sort_order' => 9],
            ['name' => 'Neuro Surgery', 'icon' => 'brain', 'short_description' => 'Advanced neurosurgical procedures for brain, spine and peripheral nervous system conditions.', 'sort_order' => 10],
            ['name' => 'Neuro Physician', 'icon' => 'brain', 'short_description' => 'Diagnosis and treatment of neurological disorders including stroke, epilepsy and Parkinson\'s disease.', 'sort_order' => 11],
            ['name' => 'Urology', 'icon' => 'kidneys', 'short_description' => 'Comprehensive urological care for kidney, bladder, prostate and urinary tract conditions.', 'sort_order' => 12],
            ['name' => 'Cardiology', 'icon' => 'heart', 'short_description' => 'Expert cardiac care including diagnostics, intervention and management of heart diseases.', 'sort_order' => 13],
            ['name' => 'Gastroenterology', 'icon' => 'stomach', 'short_description' => 'Specialized care for digestive system disorders including liver, intestinal and pancreatic conditions.', 'sort_order' => 14],
            ['name' => 'Nephrology', 'icon' => 'kidney', 'short_description' => 'Expert care for kidney diseases including chronic kidney disease management and transplant support.', 'sort_order' => 15],
            ['name' => 'Plastic & Reconstructive Surgery', 'icon' => 'hand-sparkles', 'short_description' => 'Reconstructive and cosmetic surgical procedures for aesthetic and functional restoration.', 'sort_order' => 16],
            ['name' => 'Dermatology & Skin Care', 'icon' => 'spa', 'short_description' => 'Complete skin care including treatment of dermatological conditions and cosmetic skin procedures.', 'sort_order' => 17],
            ['name' => 'ENT', 'icon' => 'ear', 'short_description' => 'Expert care for ear, nose and throat disorders including hearing and balance problems.', 'sort_order' => 18],
            ['name' => 'Psychiatry', 'icon' => 'brain', 'short_description' => 'Mental health services for psychological disorders, behavioral issues and addiction treatment.', 'sort_order' => 19],
            ['name' => 'Physiotherapy', 'icon' => 'person-walking', 'short_description' => 'Rehabilitation and physical therapy for recovery from injuries, surgeries and chronic conditions.', 'sort_order' => 20],
            ['name' => 'Dental Care', 'icon' => 'tooth', 'short_description' => 'Comprehensive dental services including general dentistry, orthodontics and oral surgery.', 'sort_order' => 21],
            ['name' => 'Homeopathy', 'icon' => 'leaf', 'short_description' => 'Holistic homeopathic treatment for chronic and acute conditions using natural remedies.', 'sort_order' => 22],
            ['name' => 'Accident, Burn & Trauma Care', 'icon' => 'ambulance', 'short_description' => '24×7 emergency trauma care for accident victims, burn injuries and critical emergencies.', 'sort_order' => 23],
            ['name' => 'Diagnostic Centre', 'icon' => 'vial', 'short_description' => 'State-of-the-art diagnostic services including Sonography, X-Ray, Pathology, 2D Echo, Colour Doppler and NST.', 'sort_order' => 24],
        ];

        foreach ($departments as $dept) {
            Department::updateOrCreate(
                ['slug' => Str::slug($dept['name'])],
                array_merge($dept, ['slug' => Str::slug($dept['name']), 'is_active' => true])
            );
        }
    }
}
