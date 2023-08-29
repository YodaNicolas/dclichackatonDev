<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fiche extends Model
{
    use HasFactory;

    public function detail()
    {
        return $this->HasOne(detail::class);
    }
}
