<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ErrorReport extends Model
{
    protected $table = 'mep_error_report';

    protected $fillable = [
        'device',
        'code',
        'sn',
        'address',
        'qr_name',
        'qr_email',
        'qr_tel',
        'qr_file',
        'qr_message',
        'time_created',
        'availability_time',
        'time_fixed',
        'status',
    ];

    public $timestamps = false;
}
