<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table= 'kategori';
    protected $primaryKey= 'id';
    protected $fillable=[
        'jenis_kategori','nama_kategori', 'deskripsi'
    ];
    use HasFactory;

    public function Transaksi()
{
    return $this->hasMany(Transaksi::class);
}

}
