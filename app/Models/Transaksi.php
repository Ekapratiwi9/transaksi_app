<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table= 'transaksi';
    protected $primaryKey= 'id';
    protected $fillable=[
        'kategori_id', 'tanggal_transaksi', 'nominal', 'deskripsi'
    ];
    use HasFactory;
    
    public function Kategori()
    {  
    return $this->belongsTo(Kategori::class);
    }

}
