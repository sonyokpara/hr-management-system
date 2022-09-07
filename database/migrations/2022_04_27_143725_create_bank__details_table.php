<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank__details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->constrained('employees');
            $table->string('bank_name');
            $table->string('account_number');
            $table->string('branch');
            $table->string('currency');
            $table->string('swift_code');
            $table->string('sort_code');
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
        Schema::dropIfExists('bank__details');
    }
}
