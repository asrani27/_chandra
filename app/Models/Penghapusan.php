<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penghapusan extends Model
{
    protected $table = 'penghapusan';
    protected $guarded = ['id'];

    public function aset()
    {
        return $this->belongsTo(Aset::class);
    }
}
