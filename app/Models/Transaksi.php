<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Detail_Transaksi;

class Transaksi extends Model
{
    protected $fillable = ['kode', 'total', 'status'];
    public function detailTransaksi(){
        return $this->hasMany(Detail_Transaksi::class);
    }
}
