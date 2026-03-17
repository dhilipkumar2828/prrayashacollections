<?php
include 'vendor/autoload.php';
$app = include_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

$count = DB::table('stock_log')->where('remarks', 'Order Placed')->count();
echo "Total 'Order Placed' entries: " . $count . "\n";

$count2 = DB::table('stock_log')->where('remarks', 'LIKE', 'ORD-%')->count();
echo "Total 'ORD-...' entries: " . $count2 . "\n";

$sample = DB::table('stock_log')->orderBy('id', 'desc')->limit(5)->get();
foreach($sample as $s) {
    echo "ID: {$s->id}, Remarks: [{$s->remarks}]\n";
}
