<?php

namespace App\Models;

use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    public function posts(){
        return $this->belongsTo(Posts::class);
    }
}
