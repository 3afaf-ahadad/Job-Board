<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Listing extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'desc' ];
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
