<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendaftaran465 extends Model
{
    use HasFactory;
    protected $table = "daftar465";
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'nama',
        'nik',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir'
    ];
}
