<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $namespace = 'posts';
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

