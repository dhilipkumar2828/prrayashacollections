<?php
include 'vendor/autoload.php';
$app = include_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

$logs = DB::table('stock_log')
    ->where('remarks', 'Order Placed')
    ->orderBy('id', 'desc')
    ->limit(5)
    ->get();

foreach($logs as $log) {
    echo "Log ID: " . $log->id . " | Remarks: " . $log->remarks . " | Created At: " . $log->created_at . "\n";
}
