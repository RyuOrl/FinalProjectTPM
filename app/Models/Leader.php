<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Leader extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function group(): BelongsTo
    {
        return $this->belongsTo(User::class, 'group_id');
    }
}
