<?php
include 'vendor/autoload.php';
$app = include_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

$logs = DB::table('stock_log')->where('remarks', 'LIKE', '%Order%')->orderBy('id', 'desc')->get();

echo "Logs with 'Order' in remarks:\n";
foreach($logs as $log) {
    echo "ID: " . $log->id . " | Remarks: " . $log->remarks . " | Created: " . $log->created_at . "\n";
}

$logs2 = DB::table('stock_log')->orderBy('id', 'desc')->limit(10)->get();
echo "\nLast 10 logs:\n";
foreach($logs2 as $log) {
    echo "ID: " . $log->id . " | Remarks: " . $log->remarks . " | Created: " . $log->created_at . "\n";
}
