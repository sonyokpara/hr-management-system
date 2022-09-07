<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDependantChildrensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependant_childrens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->constrained('employees');
            $table->string('child_name');
            $table->date('child_birthdate');
            $table->enum('is_student', ['Yes', 'No']);
            $table->string('name_of_sch')->nullable();
            $table->string('location_of_sch');
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
        Schema::dropIfExists('dependant_childrens');
    }
}
