<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Leader extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function task(): HasOne
    {
        return $this->hasOne(Leader::class);
    }
}
