<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


/**
 * @property int $id
 * @property int $replay_id
 * @property int $post_id
 * @property Post $post
 * @property Comment $replay
 * @property array<Comment> $replies
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $message
 * @property bool $is_active
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'message',
        'is_active',
        'replay_id',
        'post_id',
    ];

    protected $casts = [
        'replay_id' => 'int',
        'post_id' => 'int',
    ];


    public function replay(){
        return $this->belongsTo(Comment::class ,'replay_id','id');
    }


    public function post(){
        return $this->belongsTo(Post::class ,'post_id','id');
    }
    public function replies(){
        return $this->hasMany(Comment::class ,'replay_id','id');
    }
}
