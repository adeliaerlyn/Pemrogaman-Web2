<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs';
    protected $fillable = [
        'nama_barang', 'gambar', 'harga', 'stok', 'keterangan'
    ];
    protected $primaryKey = 'id';
    public $incrementing = true;
    public function pesanan_detail()
    {
        return $this->hasMany('App\PesananDetail','barang_id', 'id');
    }
}
