<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;
    protected $table='transaksi';
    protected $fillable=['nama_pelanggan', 'nama_menu', 'jumlah', 'total_harga', 'nama_pegawai'];

    
}


