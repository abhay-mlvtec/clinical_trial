<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScreeningResult extends Model
{
    use HasFactory;
    public $fillable = ['screening_id', 'is_eligible',  'assigned_to'];
}
