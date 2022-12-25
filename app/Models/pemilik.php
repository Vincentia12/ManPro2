<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
// // use softdeletes;

class pemilik extends Model
{
    use HasFactory,
    Notifiable, softdeletes;
    

    protected $fillable = [
        // 'id',
        'tanah_id',
        'nama',
        'no_ktp',
        'tempat_lahir',
        'tanggal_lahir',
        'pekerjaan',
        'alamat',
        'no_tlp',
    ];

    protected $table = "pemiliks";
    protected $primarykay = "id";

    public function tanah()
    {
        return $this->belongsTo(tanah::class);
    }
}
