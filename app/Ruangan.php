<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'ruangan';

    protected $fillable = [
        'nama_ruangan', 'kapasitas_ruangan', 'waktu_ruangan', 'status_ruangan'
    ];


    public function peminjaman(){
        return $this->hasMany(PeminjamanRuangan::class, 'ruangan_id', 'id');
    }


}
