<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_produk',
        'alamat',
        'nomer_telepon'
    ];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'id_pelanggan');
    }
}
