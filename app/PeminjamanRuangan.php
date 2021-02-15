<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PeminjamanRuangan extends Model
{

    use SoftDeletes;

    protected $table = 'peminjamanruangan';

    protected $fillable = [
        'users_id', 'ruangan_id', 'tanggal_peminjaman'
    ];


    public function ruangan(){
        return $this->belongsTo(Ruangan::class, 'ruangan_id', 'id');
    }

    public function users(){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    protected $casts = [
        'created_at' => 'datetime:d-m-Y',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'tanggal_peminjaman'
    ];

}
