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
        Schema::create('delivery_boy_bank_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('delivery_boy_id');
            $table->foreign('delivery_boy_id')->references('id')->on('delivery_boys')->cascadeOnDelete();
            $table->string('bank_name');
            $table->string('account_number');
            $table->string('ifsc_code');
            $table->string('branch_name');
            $table->string('account_holder_name');
            $table->string('swift_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_boy_bank_details');
    }
};
