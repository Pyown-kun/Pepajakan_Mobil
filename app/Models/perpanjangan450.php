<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perpanjangan450 extends Model
{
    use HasFactory;
    protected $table = "perpanjangan450";
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'nama',
        'alamat',
        'lama_perpanjangan',
        'tanggal',
        'bunga'
    ];
}
