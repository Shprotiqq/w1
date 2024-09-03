<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'menu_id', 'sorting', 'scroll_to', 'link'];

    public function menu(): BelongsTo
    {
        return $this->belongsTo(self::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(self::class);
    }
}
