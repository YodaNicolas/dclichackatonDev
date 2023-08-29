<?php

namespace App\Models;

use App\Models\ProgramEven;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evenement extends Model
{
    use HasFactory;


    public function programeven()
    {
        return $this->belongsTo(ProgramEven::class);
    }
}
