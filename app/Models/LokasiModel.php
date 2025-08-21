<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LokasiModel extends Model
{
    use HasFactory;

    protected $table = 't_lokasi';

    protected $guarded = ['id'];

    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }

    public function armada()
    {
        return $this->belongsTo(ArmadaModel::class, 'armada_id');
    }
}
