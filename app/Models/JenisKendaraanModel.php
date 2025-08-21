<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKendaraanModel extends Model
{
    use HasFactory;

    protected $table = 'm_jenis_kendaraan';

    protected $guarded = ['id'];

    public function armadas()
    {
        return $this->hasMany(ArmadaModel::class, 'jenis_kendaraan_id');
    }
}
