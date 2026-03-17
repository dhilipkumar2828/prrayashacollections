<?php
include 'vendor/autoload.php';
$app = include_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

$logs = DB::table('stock_log')->orderBy('id', 'desc')->limit(20)->get();

foreach($logs as $log) {
    echo "ID: " . $log->id . " | Product ID: " . $log->product_id . " | Qty: " . $log->qty . " | Remarks: " . $log->remarks . " | Created: " . $log->created_at . "\n";
}
