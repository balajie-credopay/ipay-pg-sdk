<?php
namespace IPay\Resources;

use IPay\Config;
use IPay\IPayPaymentGateway;

class OrderAPI {
    private $gateway;

    public function __construct(IPayPaymentGateway $gateway) {
        $this->gateway = $gateway;
    }

    public function createOrder($orderData) {
        $jsonInputString = json_encode($orderData);
        return $this->gateway->handleRequest('POST', Config::CREATE_ORDER_URL, $jsonInputString);
    }

    public function checkStatus($orderId) {
        return $this->gateway->handleRequest('GET', Config::CHECK_STATUS_URL . "?orderId={$orderId}");
    }
}
?>
