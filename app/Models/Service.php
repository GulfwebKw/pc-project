<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


/**
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $icon
 * @property string $content
 * @property string $image
 * @property bool $is_active
 * @property int $ordering
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'icon',
        'content',
        'image',
        'is_active',
        'ordering',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'ordering' => 'int'
    ];
}
