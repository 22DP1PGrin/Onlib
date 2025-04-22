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
        Schema::create('technical_support_form', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('nickname');
            $table->enum('subject', ['Tehniskas problēmas', 'Konts un pieteikšanās', 'Satura jautājumi', 'Cits'])->default('Cits');
            $table->text('problem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technical_support_form');
    }
};
