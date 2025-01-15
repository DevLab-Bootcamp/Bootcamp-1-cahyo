<?php
// app/Models/User.php
namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasUuids;


    protected $fillable = [
        'username', 'email', 'password', 'role',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isDoctor()
    {
        return $this->role === 'DOCTOR';
    }

    
    public function isPatient()
    {
        return $this->role === 'PATIENT';
    }
}
