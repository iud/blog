<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public $timestamps = ['created_at'];
    const UPDATED_AT = null;

    public function post()
    {
        return $this->hasOne(Post::class);
    }

    public function getNewestByAmount(int $amount)
    {
        return $this->orderBy('created_at', 'DESC')->take($amount);
    }
}
