<?php

namespace Database\Seeders;

use App\Models\InsuranceCompany;
use Illuminate\Database\Seeder;

class InsuranceSeeder extends Seeder
{
    public function run(): void
    {
        $insurance = [
            'United India Insurance',
            'The Oriental Insurance',
            'The New India Assurance',
            'National Insurance',
            'Bajaj Allianz General Insurance',
            'Star Health and Allied Insurance',
            'Manipal Cigna Health Insurance',
            'Future Generali Health Insurance',
            'IFFCO Tokio Health Insurance',
            'HDFC ERGO',
            'ICICI Lombard General Insurance',
            'Reliance General Insurance',
            'Care Health Insurance',
            'Tata AIG',
            'Acko Health Insurance',
            'SBI General Insurance',
            'Universal Sompo',
        ];

        $tpa = [
            'United Health Care Parekh TPA',
            'MediAssist India TPA',
            'MD India Health Care TPA',
            'Paramount Health Services',
            'E-Meditek TPA Services',
            'Heritage Health TPA',
            'Focus Health Services TPA',
            'Medicare TPA Services',
            'Family Health Plan TPA',
            'Raksha TPA',
            'Vidal Health TPA',
            'Anyuta Health Care TPA',
            'East West Assist TPA',
            'Med Save Health Care TPA',
            'M.S. Chola Mandalam',
            'Alankit Health Care TPA',
            'Health India TPA Services',
            'Good Health TPA Services',
            'Vipul Med Corp TPA',
            'Park Mediclaim TPA',
            'Safeway TPA Services',
            'Anmol Medicare TPA',
            'Dedicated Health Care Services',
            'Grand Healthcare Services TPA',
            'Rothshield Healthcare Services',
            'Sri Gokulam Health Services TPA',
            'Spurthi Meditech TPA Solutions',
            'Happy Insurance TPA',
            'Ericson TPA Health Care',
            'Health Insurance TPA of India',
        ];

        foreach ($insurance as $i => $name) {
            InsuranceCompany::updateOrCreate(['name' => $name], ['type' => 'insurance', 'is_active' => true, 'sort_order' => $i + 1]);
        }

        foreach ($tpa as $i => $name) {
            InsuranceCompany::updateOrCreate(['name' => $name], ['type' => 'tpa', 'is_active' => true, 'sort_order' => $i + 1]);
        }
    }
}
