<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email'];
    public $timestamps = true;

    function profiles():HasOne{
        return $this->hasOne(Profile::class);
    }

    function posts():HasMany{
        return $this->hasMany(Post::class);
    }

    function comments():HasMany{
        return $this->hasMany(Comment::class);
    }
}
