<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruteur extends Model
{
    use HasFactory;

    public function condidat()
    {
        return $this->belongsTo(Condidat::class);
    }
}
