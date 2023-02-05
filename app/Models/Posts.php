<?php

namespace App\Models;

use App\Models\Rating;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    // protected $with = ['user'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function rating(){
        return $this->hasMany(Rating::class);
    }
}
