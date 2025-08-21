<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArmadaModel extends Model
{
    use HasFactory;

    protected $table = 'm_armada';

    protected $guarded = ['id'];

    public function vehicleType()
    {
        return $this->belongsTo(JenisKendaraanModel::class, 'jenis_kendaraan_id');
    }

    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }

    public function shipments()
    {
        return $this->hasMany(PengirimanModel::class, 'armada_id');
    }

    public function bookings()
    {
        return $this->hasMany(BookingModel::class, 'armada_id');
    }

    public function locations()
    {
        return $this->hasMany(LokasiModel::class, 'armada_id');
    }
}
