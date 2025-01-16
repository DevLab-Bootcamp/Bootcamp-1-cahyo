<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $table = 'drugs'; 

    protected $fillable = ['kode_drug', 'nama_drug', 'deskripsi_drug'];
}
