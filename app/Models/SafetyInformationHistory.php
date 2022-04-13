<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SafetyInformationHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'own_condition',
        'family_condition',
        'go_to_work',
        'comment'
    ];
}
