<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'slug',
        'value',
        'image',
        'files',
        'data',
    ];

    protected $casts = [
        'files' => 'collection',
        'data' => 'collection',
    ];

    public const TYPES = [
        'brand' => 0,
        'seo' => 1,
        'first_screen' => 2,
        'option' => 3,
        'portfolio' => 4,
        'video' => 5,
        'send_request' => 6,
        'stock' => 7,
        'price-list' => 8,
        'rates' => 9,
        'request_for_installments' => 10,
        'about_company' => 11,
        'team' => 12,
        'review' => 13,
        'certificates' => 14,
        'delivery' => 15,
        'conditions' => 16,
        'promotions' => 17,
        'seo_text' => 18,
        'questions' => 19,
        'quiz' => 20,
        'products_rating' => 21,
        'short_codes' => 22,
    ];
}
