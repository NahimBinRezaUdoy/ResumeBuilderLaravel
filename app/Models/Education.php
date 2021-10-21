<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = ['sector_name', 'sector_location', 'degree', 'field_of_study', 'graduation_start_date', 'graduation_end_date'];
}
