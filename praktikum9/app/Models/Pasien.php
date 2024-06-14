<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = "Pasiens"; //nama table yg digunakan


    //kolom yg dapat di isi di tabel pasien
    protected $fillable = [
        'kode',
        'nama',
        'tmp_lahir',
        'tgl_lahir',
        'gender',
        'email',
        'alamat',
    ];
    
    // non aktifkan timestamp
    public $timestamps = false;
}
    