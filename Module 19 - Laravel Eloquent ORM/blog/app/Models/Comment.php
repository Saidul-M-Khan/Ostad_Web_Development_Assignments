<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['post_id', 'user_id', 'content', 'created_at'];

    public $timestamps = true;

    // protected $guarded = [];

    function users():BelongsTo{
        return $this->belongsTo(User::class);
    }

    function posts():BelongsTo{
        return $this->belongsTo(Post::class);
    }
}
