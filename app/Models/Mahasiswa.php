<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelas;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'id_mahasiswa';
    protected $fillable = [
        'Nim',
        'Email',
        'Nama',
        'Kelas',
        'Jurusan',
        'Alamat',
        'Lahir',
    ]; 

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    public function mahasiswa_matakuliah(){
        return $this->belongsToMany(Mahasiswa_MataKuliah::class);
    }
}
