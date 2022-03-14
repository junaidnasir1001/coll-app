<?php

namespace App\Imports;

use App\Models\Student;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row){
            $data=[
                'admission_year' =>$row['admission_year'],
                'admission_form_no' =>$row['admission_form_no'],
                'admitted_in' =>$row['admitted_in'],
                'admission_level' =>$row['admission_level'],
                'admission_on' =>$row['admission_on'],
                'quota_type' =>$row['quota_type'],
                'college_roll_no' =>$row['college_roll_no'],
                'registration_no' =>$row['registration_no'],
                'roll_no_one' =>$row['roll_no_one'],
                'roll_no_two' =>$row['roll_no_two'],
                'academic_session' =>$row['academic_session'],
                'current_semester_year' =>$row['current_semester_year'],
                'name' =>$row['name'],
                'cnic' =>$row['cnic'],
                'date_of_cnic_issue' =>$row['date_of_cnic_issue'],
                'father_name' =>$row['father_name'],
                'father_cnic' =>$row['father_cnic'],
                'guardian_name' =>$row['guardian_name'],
                'guardian_cnic' =>$row['guardian_cnic'],
                'guardian_relation' =>$row['guardian_relation'],
                'student_phone_no' =>$row['student_phone_no'],
                'home_phone_no' =>$row['home_phone_no'],
                'gender' =>$row['gender'],
                'hafiz' =>$row['hafiz'],
                'domicile_district' =>$row['domicile_district'],
                'residential_city' =>$row['residential_city'],
                'province' =>$row['province'],
                'nationality' =>$row['nationality'],
                'email' =>$row['email'],
                'disability' =>$row['disability'],
                'disability_type' =>$row['disability_type'],
                'postal_address' =>$row['postal_address'],
                'permanent_address' =>$row['permanent_address'],
                'matric_roll_no' =>$row['matric_roll_no'],
                'matric_registration_no' =>$row['matric_registration_no'],
                'matric_board_name' =>$row['matric_board_name'],
                'matric_passing_year' =>$row['matric_passing_year'],
                'matric_pass_type' =>$row['matric_pass_type'],
                'matric_total_marks' =>$row['matric_total_marks'],
                'matric_obtained_marks' =>$row['matric_obtained_marks'],
                'matric_grade' =>$row['matric_grade'],
                'matric_board_noc' =>$row['matric_board_noc'],
                'matric_institute_name' =>$row['matric_institute_name'],
                'matric_subject_combination' =>$row['matric_subject_combination'],
                'inter_roll_no' =>$row['inter_roll_no'],
                'inter_registration_no' =>$row['inter_registration_no'],
                'inter_board_name' =>$row['inter_board_name'],
                'inter_passing_year' =>$row['inter_passing_year'],
                'inter_pass_type' =>$row['inter_pass_type'],
                'inter_total_marks' =>$row['inter_total_marks'],
                'inter_obtained_marks' =>$row['inter_obtained_marks'],
                'inter_grade' =>$row['inter_grade'],
                'inter_institute_name' =>$row['inter_institute_name'],
                'inter_subject_combination' =>$row['inter_subject_combination'],
                'marital_status' =>$row['marital_status'],
            ];
            Student::create($data);
        }
    }
}
