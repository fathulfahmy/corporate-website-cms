<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fellow extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'image',
        'name',
        'position',
        'email',
        'qualifications',
        'research_areas',
        'status',
    ];

    protected $casts = [
        'qualifications' => 'json',
        'research_areas' => 'json',
    ];
}
