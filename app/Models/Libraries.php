<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libraries extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function users()
    {
        return $this->hasMany(Users::class);
    }
}
