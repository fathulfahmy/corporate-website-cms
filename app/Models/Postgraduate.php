<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postgraduate extends Model
{
    use HasFactory;

    protected $fillable = [
        "image",
        "name",
        "candidancy",
        "email",
        "research_areas",
        "supervisor",
        "status",
    ];

    protected $casts = [
        "research_areas" => "json",
    ];
}
