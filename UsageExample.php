<?php
require_once 'vendor/autoload.php';
require_once 'src/Config.php';
require_once 'src/IPayPaymentGateway.php';
require_once 'src/resources/OrderAPI.php';
require_once 'src/resources/TransactionAPI.php';

use IPay\IPayPaymentGateway;

$gateway = new IPayPaymentGateway('6ae8c0eb886eaa10b320f756', 'tjvMukNToS5wjHOvmqMTiC7xf');

// Create an order
$orderData = [
    'receiptId' => 'RE_DVGSD24535SFGER01',
    'amount' => 1,
    'currency' => 'QAR',
    'description' => 'Test Payment',
    'customerFields' => [
        'name' => 'Kishore',
        'email' => 'kishore.s@salispay.in',
        'phone' => '90036440'
    ],
    'uiMode' => 'checkout',
    'redirectType' => 'redirect'
];

try {
    $orderResponse = $gateway->order->createOrder($orderData);
    echo "Order Response: " . $orderResponse . "\n";

    // Check order status
    $orderId = 'order-id';
    $statusResponse = $gateway->order->checkStatus($orderId);
    echo "Order Status: " . $statusResponse . "\n";
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
