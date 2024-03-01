<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('data_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('action_type'); // save or update
            $table->string('data_type'); // invoices
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_logs');
    }
};
