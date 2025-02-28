<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QR extends Model
{
    protected $table = 'mep_qr';

    protected $fillable = [
        'code',
        'name',
        'sku',
        'sn',
        'adress',
        'order_number',
        'warranty',
        'warranty_text',
        'delivery',
    ];

    public $timestamps = false;
}
