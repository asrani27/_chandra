<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instalasi extends Model
{
    protected $table = 'instalasi';
    protected $guarded = ['id'];

    public function aset()
    {
        return $this->belongsTo(Aset::class);
    }
}
