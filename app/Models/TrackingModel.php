<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingModel extends Model
{
    use HasFactory;

    protected $table = 't_tracking';

    protected $guarded = ['id'];

    public $timestamps = false; // karena updated_at pakai timestamp manual

    public function shipment()
    {
        return $this->belongsTo(PengirimanModel::class, 'pengiriman_id');
    }
}
