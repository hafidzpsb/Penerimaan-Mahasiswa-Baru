<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'foto',
        'nama_lengkap',
        'alamat_ktp',
        'alamat',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'nomor_telepon',
        'nomor_hp',
        'email',
        'kewarganegaraan',
        'kewarganegaraan_luar_negeri',
        'tanggal_lahir',
        'tempat_lahir',
        'kabupaten_tempat_lahir',
        'provinsi_tempat_lahir',
        'tempat_lahir_luar_negeri',
        'jenis_kelamin',
        'status_menikah',
        'agama',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
