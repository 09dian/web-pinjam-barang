<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Matkul;


class Pinjaman extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'name_barang',
        'name_guru',
        'matpel',
        'kelas',
        'date_meminjam',
        'date_mengembalikan',
        'penerima',
        'catatan',
        'action',
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'name_guru', 'name');
    }
    

    
}

