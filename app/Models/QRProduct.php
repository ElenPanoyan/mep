<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QRProduct extends Model
{
    protected $table = 'mep_qr_products';

    protected $fillable = [
        'product_sku',
        'product_name',
        'url',
    ];

    public $timestamps = false;
}
