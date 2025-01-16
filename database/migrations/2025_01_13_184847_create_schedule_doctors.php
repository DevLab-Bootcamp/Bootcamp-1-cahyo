<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('user_profiles')) {
            Schema::create('schedule_doctors', function (Blueprint $table) {
                $table->id(); // Primary key
                $table->unsignedBigInteger('user_id'); // Foreign key ke tabel `users`
                $table->unsignedBigInteger('clinic_id'); // Foreign key ke tabel `clinics`
                $table->time('start_time');
                $table->time('end_time');
                $table->date('date');
                $table->timestamps();
    
                // Foreign key untuk `user_id` ke tabel `users`
                $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
    
                // Foreign key untuk `clinic_id` ke tabel `clinics`
                $table->foreign('clinic_id')->references('id')->on('clinics')->cascadeOnDelete();
            });
        }
        
    }

    public function down(): void
    {
        Schema::dropIfExists('schedule_doctors');
    }
};
