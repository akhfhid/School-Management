<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    protected $table = "ujian";

    public function mata_pelajaran(){
        return $this->belongsTo(MataPelajaran::class);
    }
}
