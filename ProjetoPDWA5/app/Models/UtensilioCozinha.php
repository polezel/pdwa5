<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtensilioCozinha extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'material',
        'cor',
        'uso',
        'capacidade'
    ];
}