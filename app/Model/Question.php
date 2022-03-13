<?php

namespace App\Model;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replays()
    {
        return $this->hasMany(Replay::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
