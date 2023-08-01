<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','mobile','user_id'];
    protected $attributes = [
        'name' => 'Anonymous',
        'email' => 'N/A',
        'mobile' => '0',
    ];
    public $timestamps = true;
}
