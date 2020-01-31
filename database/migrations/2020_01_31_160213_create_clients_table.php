<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('client_name');
            $table->string('address');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('guarantor_name1')->nullable();
            $table->string('guarantor_name2')->nullable();
            $table->string('joined_data');
            $table->string('contact_number');
            $table->string('optional_address1')->nullable();
            $table->string('optional_address2')->nullable();
            $table->boolean('is_vip')->default(0);
            $table->float('weight');
            $table->float('temperature');
            $table->string('blood_group');
            $table->string('blood_pressure');
            $table->timestamps();

            /* -----
            Need to add more fields.
            */

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
