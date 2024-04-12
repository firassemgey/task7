<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'library_id'
    ];
    public function books()
    {
        return $this->belongsToMany(Books::class);
    }
    public function library()
    {
        return $this->belongsTo(Libraries::class);
    }
}
