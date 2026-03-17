<?php
include 'vendor/autoload.php';
$app = include_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

$logs = DB::table('stock_log')->orderBy('id', 'desc')->limit(20)->get();
foreach($logs as $log) {
    echo "ID: " . $log->id . " | Remarks: " . $log->remarks . " | At: " . $log->created_at . "\n";
}
