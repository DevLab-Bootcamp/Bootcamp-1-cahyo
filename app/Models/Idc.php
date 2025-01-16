<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idc extends Model
{
    use HasFactory;

    protected $table = 'idc';

    protected $fillable = [
        'code',
        'name_en',
        'name_id',
    ];
}

