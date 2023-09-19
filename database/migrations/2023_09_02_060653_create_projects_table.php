<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->date('ready_date')->nullable();
            $table->unsignedBigInteger('sender_id');
            $table->foreign('sender_id')->references('id')->on('companies')->onDelete('cascade');
            $table->unsignedBigInteger('receiver_id');
            $table->foreign('receiver_id')->references('id')->on('companies')->onDelete('cascade');
            $table->unsignedBigInteger('company_contract_id');
            $table->foreign('company_contract_id')->references('id')->on('company_contracts')->onDelete('cascade');
            $table->unsignedBigInteger('incoterm_id');
            $table->foreign('incoterm_id')->references('id')->on('incoterms')->onDelete('cascade');
            $table->integer('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
