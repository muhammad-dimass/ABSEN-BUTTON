<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nis',
        'nama',
        'jenis_kelamin',
        'kelas',
        'keterangan',
    ];

    public function updateKeteranganByNIS($nis, $keterangan)
    {
        $siswa = $this->where('nis', $nis)->first();

        if ($siswa) {
            $siswa->keterangan = $keterangan;
            $siswa->save();
        }

        return $siswa;
    }
}
