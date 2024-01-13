<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screening extends Model
{
    use HasFactory;
    public $fillable = ['first_name', 'dob', 'frequency', 'daily_frequency'];

    public function screeningResult()
    {
        return $this->hasOne(ScreeningResult::class);
    }
}
