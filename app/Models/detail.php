<?php

namespace App\Models;

use App\Models\User;
use App\Models\fiche;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'domaine',
        'detai_domaine',
        'description',
        'prenom',
        'nom',
        'ndate de naissanceom',
        'email',
        'password',
    ];


    public function user()
    {
        return $this->HasOne(User::class);
    }

    public function fiche()
    {
        return $this->belongsTo(fiche::class);
    }
}

