<?php
include 'vendor/autoload.php';
$app = include_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

$log = DB::table('stock_log')->where('id', 26982)->first();
echo "OPR: " . $log->opr . "\n";
echo "QTY: " . $log->qty . "\n";
echo "V_ID: " . $log->v_id . "\n";
echo "REMARKS: " . $log->remarks . "\n";
echo "CREATED_AT: " . $log->created_at . "\n";
