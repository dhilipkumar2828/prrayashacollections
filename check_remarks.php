<?php
include 'vendor/autoload.php';
$app = include_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

$remarks = DB::table('stock_log')
    ->select('remarks', DB::raw('count(*) as count'))
    ->groupBy('remarks')
    ->orderBy('count', 'desc')
    ->limit(20)
    ->get();

foreach($remarks as $r) {
    echo "Remark: [" . $r->remarks . "] | Count: " . $r->count . "\n";
}
