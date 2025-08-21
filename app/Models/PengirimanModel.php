<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengirimanModel extends Model
{
     use HasFactory;

    protected $table = 't_pengiriman';

    protected $guarded = ['id'];

    public function armada()
    {
        return $this->belongsTo(ArmadaModel::class, 'armada_id');
    }

    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function trackings()
    {
        return $this->hasMany(TrackingModel::class, 'pengiriman_id');
    }
}
