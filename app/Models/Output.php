<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Output extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date',
    ];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

    public function outputproduct(): HasMany
    {
        return $this->hasMany(OutputProduct::class);
    }
}
