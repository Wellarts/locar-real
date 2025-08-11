<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PecaServico extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'nome',       
    ];

    
}
