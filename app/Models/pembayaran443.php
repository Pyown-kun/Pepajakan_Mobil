<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran443 extends Model
{
    use HasFactory;
    protected $table = "pembayaran443";
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'nama',
        'plat_nomor',
        'jenis_kendaran',
        'tanggal_pembayaran',
        'total_harga'
    ];
}
