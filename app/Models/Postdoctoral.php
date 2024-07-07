<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postdoctoral extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'image',
        'name',
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
