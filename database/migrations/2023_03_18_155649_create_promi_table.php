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
        Schema::create('tbl_promi', function (Blueprint $table) {
            $table->id();
            $table->string('consumer_name');
            $table->string('consumer_address');
            $table->string('consumer_contact');
            $table->string('account_no');
            $table->string('no_of_bills');
            $table->string('total_amount');
            $table->string('remarks');
            $table->boolean('is_approve');
            $table->boolean('is_posted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_promi');
    }
};
