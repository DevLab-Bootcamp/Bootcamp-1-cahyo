<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    // Tentukan nama model yang digunakan oleh factory ini
    protected $model = User::class;

    /**
     * Definisikan data dummy untuk model User.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->uuid, // Menggunakan UUID untuk kolom 'id'
            'name' => $this->faker->name,
            'username' => $this->faker->unique()->userName,
            'password' => bcrypt('password'), // Contoh password terenkripsi
            'faculty' => $this->faker->word,
            'prodi' => $this->faker->word,
            'medical_record' => $this->faker->word,
            'role' => 'PATIENT', // Nilai default untuk 'role'
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
