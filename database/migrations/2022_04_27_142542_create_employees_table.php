<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id('id');
            $table->string('staff_id')->nullable();
            $table->string('tag_id')->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('other_name')->nullable();
            $table->string('job_title')->nullable();
            $table->date('employment_date')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('photo');
            $table->foreignId('department_id')->references('id')->on('departments');
            $table->foreignId('section_id')->references('id')->on('sections');
            $table->string('ssnit_number')->unique();
            $table->string('ghana_card_number')->unique();
            $table->string('convid19_card_number')->nullable();
            $table->foreignId('driving_license')->nullable();
            $table->string('edu_qualification')->nullable();
            $table->string('min_com_cert')->nullable();
            $table->string('telephone_no');
            $table->string('email_address')->unique();
            $table->foreignId('shift')->references('roster_id')->on('rosters');
            $table->string('hometown');
            $table->string('birth_place');
            $table->string('place_of_res_onsite');
            $table->string('res_address_onsite');
            $table->string('place_of_res_offsite');
            $table->string('res_address_offsite');
            $table->string('rank');
            $table->string('status');
            $table->string('tier2_number');
            $table->enum('provident_fund_contributor', ['yes', 'no']);
            $table->enum('unionized', ['yes', 'no']);
            $table->string('branch_union')->nullable();
            $table->string('pmsu')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
