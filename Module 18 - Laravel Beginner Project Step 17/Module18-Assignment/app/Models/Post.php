<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model {
    use HasFactory;
    // use SoftDeletes;

    public $table       = 'posts';
    protected $fillable = array( 'title', 'description' );

    public function categories() {
        return $this->belongsTo( Category::class );
    }

    public function latestPost() {
        return $this->belongsTo( Category::class )->latest()->first();
    }
}
