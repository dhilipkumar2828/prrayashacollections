<?php
include 'vendor/autoload.php';
$app = include_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

$count = DB::table('stock_log')->where('remarks', 'Order Placed')->count();
echo "Count of 'Order Placed': " . $count . "\n";

if ($count > 0) {
    $latest = DB::table('stock_log')->where('remarks', 'Order Placed')->orderBy('id', 'desc')->first();
    echo "Latest ID with 'Order Placed': " . $latest->id . " at " . $latest->created_at . "\n";
}
