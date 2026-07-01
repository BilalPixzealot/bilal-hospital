<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Department;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DoctorsSeeder extends Seeder
{
    public function run(): void
    {
        $doctors = [
            // Physicians
            ['name' => 'Dr. Ram Shinde', 'qualifications' => 'M.B.B.S., D.N.B. (Int. Med.), T.D.D. (Chest & Critical Care)', 'designation' => 'Consultant Physician & Critical Care Specialist', 'department' => 'ICU & General Medicine'],
            ['name' => 'Dr. Sakib Bombe', 'qualifications' => 'M.B.B.S., D.N.B. (Int. Med.)', 'designation' => 'Consultant Physician', 'department' => 'ICU & General Medicine'],
            ['name' => 'Dr. Azhar Khan', 'qualifications' => 'M.B.B.S., T.D.O. (Chest Physician)', 'designation' => 'Chest Physician', 'department' => 'ICU & General Medicine'],
            // Gynaecologists
            ['name' => 'Dr. Meenaz Dongre', 'qualifications' => 'M.B.B.S, D.G.O.', 'designation' => 'Obstetrician & Gynaecologist', 'department' => 'Maternity & Obstetrics'],
            ['name' => 'Dr. Shweta Gupta', 'qualifications' => 'M.S.', 'designation' => 'Obstetrician & Gynaecologist', 'department' => 'Maternity & Obstetrics'],
            ['name' => 'Dr. Neena Nichlani', 'qualifications' => 'D.N.B., D.G.O., M.B.B.S.', 'designation' => 'Obstetrician & Gynaecologist', 'department' => 'Gynaecology'],
            // Paediatricians
            ['name' => 'Dr. Amit Dandekar', 'qualifications' => 'M.B., D.CH., F.C.P.S.', 'designation' => 'Consultant Pediatrician', 'department' => 'Pediatrics'],
            ['name' => 'Dr. Rajesh Patil', 'qualifications' => 'M.B.B.S, D.CH.', 'designation' => 'Consultant Pediatrician', 'department' => 'Pediatrics'],
            ['name' => 'Dr. Imran Khan', 'qualifications' => 'M.B.B.S, MD, D.CH.', 'designation' => 'Consultant Pediatrician', 'department' => 'Pediatrics'],
            // General Surgeon
            ['name' => 'Dr. Zafar Shaikh', 'qualifications' => 'D.N.B., F.C.P.S., F.M.A.S., F.I.A.G.E.S., M.B.B.S.', 'designation' => 'Laparoscopic & General Surgeon', 'department' => 'General Surgery'],
            // Orthopaedic
            ['name' => 'Dr. Vilas Salve', 'qualifications' => 'M.S.(Ortho)', 'designation' => 'Consultant Orthopedic Surgeon', 'department' => 'Orthopedic Surgery'],
            ['name' => 'Dr. Faisal Bape', 'qualifications' => 'M.S.(Ortho)', 'designation' => 'Consultant Orthopedic Surgeon', 'department' => 'Orthopedic Surgery'],
            ['name' => 'Dr. Bhavik K', 'qualifications' => 'M.S.(Ortho)', 'designation' => 'Consultant Orthopedic Surgeon', 'department' => 'Orthopedic Surgery'],
            // Neuro Physician
            ['name' => 'Dr. Vyankatesh S. Bolegave', 'qualifications' => 'MBBS, MD, DNB (Med), DNB (Neurology)', 'designation' => 'Neurologist', 'department' => 'Neuro Physician'],
            ['name' => 'Dr. Kusum Sikariya', 'qualifications' => 'M.B.B.S, M.D, D.M.', 'designation' => 'Neurologist', 'department' => 'Neuro Physician'],
            // Neuro Surgeon
            ['name' => 'Dr. Mazhar Turabi', 'qualifications' => 'MBBS, MD, DNB (Med), DNB (Neurology)', 'designation' => 'Neurosurgeon', 'department' => 'Neuro Surgery'],
            ['name' => 'Dr. Nilesh V Potdar', 'qualifications' => 'M.B.B.S, M.S (Gen Surgery) M.Ch. (Neuro Surgery)', 'designation' => 'Neurosurgeon', 'department' => 'Neuro Surgery'],
            // Nephrologist
            ['name' => 'Dr. Sachin S. Gupta', 'qualifications' => 'MBBS, MD, DNB (Nephrology)', 'designation' => 'Consultant Nephrologist & Transplant Physician', 'department' => 'Nephrology'],
            // Plastic Surgeon
            ['name' => 'Dr. Sarfaraz Alam', 'qualifications' => 'M.S. MCH.', 'designation' => 'Plastic Reconstructive & Cosmetic Surgeon', 'department' => 'Plastic & Reconstructive Surgery'],
            ['name' => 'Dr. Sayyed Md. Kumail', 'qualifications' => 'M.S. MCH.', 'designation' => 'Plastic Reconstructive & Cosmetic Surgeon', 'department' => 'Plastic & Reconstructive Surgery'],
            // Urologist
            ['name' => 'Dr. Akhil Khan', 'qualifications' => 'M.B.B.S., M.S., MCH (Urology)', 'designation' => 'Urologist', 'department' => 'Urology'],
            ['name' => 'Dr. Pradeep Bhave', 'qualifications' => 'M.B.B.S., M.S., MCH (Urology)', 'designation' => 'Urologist', 'department' => 'Urology'],
            // Cardiologist
            ['name' => 'Dr. Mukesh Jha', 'qualifications' => 'MD (Medicine), DM (Cardiology)', 'designation' => 'Cardiologist', 'department' => 'Cardiology'],
            ['name' => 'Dr. Vimlesh Pandey', 'qualifications' => 'M.B.B.S, MD, DM (Cardiology)', 'designation' => 'Cardiologist', 'department' => 'Cardiology'],
            // Gastroenterologist
            ['name' => 'Dr. Sachin J. Bhojankar', 'qualifications' => 'DNB (Gen. Surg.), DNB (Surg. Gastroenterologist), MNAMS, FMAS, GI HPB, Fellow (TATA MEMORIAL CENTRE)', 'designation' => 'Surgical Gastroenterologist', 'department' => 'Gastroenterology'],
            // Psychiatrist
            ['name' => 'Dr. Siddesh D. Parhar', 'qualifications' => 'M.B.B.S. DP.M., F.I.P.S.', 'designation' => 'Consultant Psychiatrist & Sexologist', 'department' => 'Psychiatry'],
            // ENT
            ['name' => 'Dr. Farha Naaz Kazi', 'qualifications' => 'M.B.B.S. M.S.(E.N.T.)', 'designation' => 'ENT Specialist', 'department' => 'ENT'],
            // Skin Specialist
            ['name' => 'Dr. Rashid M. Shaikh', 'qualifications' => 'M.B.B.S., D.N.B, F.C.P.S, DVD (Skin & V.D.)', 'designation' => 'Dermatologist', 'department' => 'Dermatology & Skin Care'],
            // Physiotherapist
            ['name' => 'Dr. Abhijeet Devadiga', 'qualifications' => 'B.P.T.', 'designation' => 'Physiotherapist', 'department' => 'Physiotherapy'],
        ];

        $deptCache = [];
        foreach ($doctors as $i => $data) {
            if (!isset($deptCache[$data['department']])) {
                $dept = Department::where('name', $data['department'])->first();
                $deptCache[$data['department']] = $dept?->id;
            }

            $slug = Str::slug($data['name']);
            $existingCount = Doctor::where('slug', 'like', $slug . '%')->count();
            if ($existingCount > 0) {
                $slug = $slug . '-' . ($existingCount + 1);
            }

            Doctor::updateOrCreate(
                ['name' => $data['name']],
                [
                    'slug'           => Str::slug($data['name']),
                    'qualifications' => $data['qualifications'],
                    'designation'    => $data['designation'],
                    'department_id'  => $deptCache[$data['department']] ?? null,
                    'sort_order'     => $i + 1,
                    'is_active'      => true,
                ]
            );
        }
    }
}
