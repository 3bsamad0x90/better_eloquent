<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'operating_system_id',
    ];
    public function operating_system()
    {
        return $this->belongsTo(OperatingSystem::class);
    }
}
