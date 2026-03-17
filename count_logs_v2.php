<?php
include 'vendor/autoload.php';
$app = include_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

$count = DB::table('stock_log')->where('remarks', 'Order Placed')->count();
$count2 = DB::table('stock_log')->where('remarks', 'LIKE', 'ORD-%')->count();
$out = "Total Order Placed entries: " . $count . "\n";
$out .= "Total ORD entries: " . $count2 . "\n";

$sample = DB::table('stock_log')->orderBy('id', 'desc')->limit(5)->get();
foreach($sample as $s) {
    $out .= "ID: {$s->id}, Remarks: [{$s->remarks}]\n";
}

file_put_contents('logs_out_ascii.txt', $out);
echo "Done\n";
