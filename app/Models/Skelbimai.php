<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skelbimai extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'pavadinimas',
        'tekstas',
        'created_at',
        'updated_at'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
