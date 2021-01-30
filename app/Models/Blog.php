<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
        'hours',
        'category',
        'minutes',
        'recipe',
        'post',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class)->select(['id', 'name']);
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
