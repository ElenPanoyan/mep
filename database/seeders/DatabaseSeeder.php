<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\QR;
use App\Models\ErrorReport;
use App\Models\QREngineering;
use App\Models\QRProduct;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $qr = QR::create([
            'code'         => 'gfdbk',
            'name'         => 'Mise en place® FrischeHeld Arbeitsstation',
            'sku'          => 'SKU-12345',
            'sn'           => 'E6033602',
            'adress'       => 'Hotel Panorama, Rosenbergstr. 26, 54550 Daun, Deutschland',
            'order_number' => 'ORD-67890',
            'warranty'     => 5,
            'warranty_text'=> 'March 8, 2025',
            'delivery'     => 1,
        ]);

        ErrorReport::create([
            'device'            => $qr->name,
            'code'              => $qr->code,
            'sn'                => 6033602,
            'address'           => $qr->adress,
            'qr_name'           => 'Janek Doe',
            'qr_email'          => 'john@example.com',
            'qr_tel'            => '123456789',
            'qr_file'           => '',
            'qr_message'        => 'The device is not functioning properly.',
            'time_created'      => Carbon::now(),
            'availability_time' => '08:00-17:00',
            'time_fixed'        => null,
            'status'            => 'open',
        ]);

        QREngineering::create([
            'qr_code'     => $qr->code,
            'company'     => 'Mise en place Engineering',
            'technician'  => 'Janek Smith',
            'notes'       => 'Initial diagnostics complete. Further inspection needed.',
            'report_error'=> 'Minor issue detected',
            'en_file'     => '',
            'time_created'=> Carbon::now()->timestamp,
        ]);

        QRProduct::create([
            'product_sku'  => 'PROD-001',
            'product_name' => 'Device 1',
            'url'          => 'https://example.com/product/prod-001',
        ]);
    }
}
