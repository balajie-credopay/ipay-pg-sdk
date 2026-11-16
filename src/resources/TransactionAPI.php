<?php
namespace IPay\Resources;

use IPay\IPayPaymentGateway;

class TransactionAPI {
    private $gateway;

    public function __construct(IPayPaymentGateway $gateway) {
        $this->gateway = $gateway;
    }

    // Define transaction-related methods here
}
?>
