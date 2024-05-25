<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


/**
 * @property int $id
 * @property int $author_id
 * @property User $author
 * @property string $title
 * @property array<Comment> $comments
 * @property string $slug
 * @property string $short_content
 * @property string $content
 * @property string $image
 * @property bool $is_active
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'short_content',
        'content',
        'image',
        'is_active',
        'author_id',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'author_id' => 'int',
    ];

    public function author(){
        return $this->belongsTo(User::class, 'author_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class, 'post_id')
            ->where('is_active', 'approved')
            ->orderBy('created_at', 'desc');
    }
}
