<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QREngineering extends Model
{
    protected $table = 'mep_qr_engineering';

    protected $fillable = [
        'qr_code',
        'company',
        'technician',
        'notes',
        'report_error',
        'en_file',
        'time_created',
    ];

    public $timestamps = false;
}
