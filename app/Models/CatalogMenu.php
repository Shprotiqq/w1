<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CatalogMenu extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'catalog_menu_id', 'sorting', 'scroll_to', 'link'];

    public function catalogMenu(): BelongsTo
    {
        return $this->belongsTo(self::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(self::class);
    }
}
