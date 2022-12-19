<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tanah extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'id',
        'jenis_klaster',
        'lebar',
        'panjang',
        'luas',
        'blok',
        'no_rumah',
        'harga',
    ];

    protected $table = "tanahs";
    protected $primarykay = "id";


    public function pemilik()
    {
        return $this->hasOne(Pemilik::class);
    }
}
