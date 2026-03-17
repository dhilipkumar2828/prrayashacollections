<?php
include 'vendor/autoload.php';
$app = include_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

// Find all stock_log rows with 'Order Placed' remarks
$badLogs = DB::table('stock_log')->where('remarks', 'Order Placed')->get();

echo "Found " . count($badLogs) . " entries with 'Order Placed'\n\n";

$fixed = 0;
$notFixed = 0;

foreach($badLogs as $log) {
    // Try to get the order from order_products where product_id matches and created_at is close
    $orderProduct = DB::table('order_products')
        ->where('product_id', $log->product_id)
        ->where('created_at', '>=', date('Y-m-d H:i:s', strtotime($log->created_at) - 60))
        ->where('created_at', '<=', date('Y-m-d H:i:s', strtotime($log->created_at) + 60))
        ->first();

    if ($orderProduct) {
        $order = DB::table('orders')->where('id', $orderProduct->order_id)->first();
        if ($order && !empty($order->order_id)) {
            DB::table('stock_log')->where('id', $log->id)->update(['remarks' => $order->order_id]);
            echo "Fixed log ID " . $log->id . " -> " . $order->order_id . "\n";
            $fixed++;
        } else {
            echo "Log ID " . $log->id . " - order not found\n";
            $notFixed++;
        }
    } else {
        echo "Log ID " . $log->id . " - no matching order_product (product_id=" . $log->product_id . ", at=" . $log->created_at . ")\n";
        $notFixed++;
    }
}

echo "\nDone! Fixed: $fixed | Not Fixed: $notFixed\n";
