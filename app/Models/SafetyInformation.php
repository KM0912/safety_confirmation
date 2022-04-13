<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SafetyInformation extends Model
{
    
    protected $fillable = [
        'user_id',
        'own_condition',
        'family_condition',
        'go_to_work',
        'comment'
    ];

    //userテーブルとリレーションを設定
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
