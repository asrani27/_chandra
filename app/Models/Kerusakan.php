<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kerusakan extends Model
{
    protected $table = 'kerusakan';
    protected $guarded = ['id'];

    public function aset()
    {
        return $this->belongsTo(Aset::class);
    }
}
