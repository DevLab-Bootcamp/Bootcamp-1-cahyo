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
    if (!Schema::hasTable('user_profiles')) {
        Schema::create('icds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamp('created_at', 0)->nullable(); // Timestamp dengan presisi
            $table->timestamp('updated_at', 0)->nullable(); // Timestamp dengan presisi
            $table->timestamps(); // Menambahkan created_at dan updated_at otomatis
        });
    }
    
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('icds');
    }
};
