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

    // to show the sluq on any question instead of id 
    //the should be getRouteKeyName
    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $guarded = [];

    public function getPathAttribute()
    {
        return asset("api/question/$this->slug");
    }
}
