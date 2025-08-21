<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingModel extends Model
{
    use HasFactory;

    protected $table = 't_booking';

    protected $guarded = ['id'];

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function armada()
    {
        return $this->belongsTo(ArmadaModel::class, 'armada_id');
    }
}
