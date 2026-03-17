<?php
include 'vendor/autoload.php';
$app = include_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

$columns = DB::select('SHOW COLUMNS FROM stock_log');
foreach($columns as $c) {
    if($c->Field == 'remarks') {
        echo "Field: " . $c->Field . " | Default: " . $c->Default . "\n";
    }
}
