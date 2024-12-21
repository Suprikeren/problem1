<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Achievement extends Model
{
    use HasFactory;

    protected $table = 'achievements';

    protected $primaryKey = 'achievement_id';

    protected $guarded = [
        'achievement_id'
    ];

    // public function users(): BelongsTo
    // {
    //     return $this->belongsTo(User::class, 'user_id', 'user_id');
    // }
}
