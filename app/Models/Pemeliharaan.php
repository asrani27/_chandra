<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemeliharaan extends Model
{
    protected $table = 'pemeliharaan';
    protected $guarded = ['id'];

    public function aset()
    {
        return $this->belongsTo(Aset::class);
    }
}
