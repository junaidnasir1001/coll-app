<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('admission_year')->nullable();
            $table->string('admission_form_no')->nullable();
            $table->string('admitted_in')->nullable();
            $table->string('admission_level')->nullable();
            $table->string('admission_on')->nullable();
            $table->string('quota_type')->nullable();
            $table->string('college_roll_no')->nullable();
            $table->string('registration_no')->nullable();
            $table->string('roll_no_one')->nullable();
            $table->string('roll_no_two')->nullable();
            $table->string('academic_session')->nullable();
            $table->string('current_semester_year')->nullable();
            $table->string('name')->nullable();
            $table->string('cnic')->nullable();
            $table->string('date_of_cnic_issue')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_cnic')->nullable();
            $table->string('guardian_name')->nullable();
            $table->string('guardian_cnic')->nullable();
            $table->string('guardian_relation')->nullable();
            $table->string('student_phone_no')->nullable();
            $table->string('home_phone_no')->nullable();
            $table->string('gender')->nullable();
            $table->string('hafiz')->nullable();
            $table->string('domicile_district')->nullable();
            $table->string('residential_city')->nullable();
            $table->string('province')->nullable();
            $table->string('nationality')->nullable();
            $table->string('email')->nullable();
            $table->string('disability')->nullable();
            $table->string('disability_type')->nullable();
            $table->string('postal_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('matric_roll_no')->nullable();
            $table->string('matric_registration_no')->nullable();
            $table->string('matric_board_name')->nullable();
            $table->string('matric_passing_year')->nullable();
            $table->string('matric_pass_type')->nullable();
            $table->string('matric_total_marks')->nullable();
            $table->string('matric_obtained_marks')->nullable();
            $table->string('matric_grade')->nullable();
            $table->string('matric_board_noc')->nullable();
            $table->string('matric_institute_name')->nullable();
            $table->string('matric_subject_combination')->nullable();
            $table->string('inter_roll_no')->nullable();
            $table->string('inter_registration_no')->nullable();
            $table->string('inter_board_name')->nullable();
            $table->string('inter_passing_year')->nullable();
            $table->string('inter_pass_type')->nullable();
            $table->string('inter_total_marks')->nullable();
            $table->string('inter_obtained_marks')->nullable();
            $table->string('inter_grade')->nullable();
            $table->string('inter_institute_name')->nullable();
            $table->string('inter_subject_combination')->nullable();
            $table->string('marital_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
