<?php
use PHPUnit\Framework\TestCase;
use IPay\IPayPaymentGateway;
use IPay\Resources\TransactionAPI;

class TransactionAPITest extends TestCase {
    private $gateway;
    private $transactionAPI;

    protected function setUp(): void {
        $this->gateway = new IPayPaymentGateway('65a621098498347eeecfe0a0', 'g2dSScWNGQwd4DMWjy8rOFptP');
        $this->transactionAPI = new TransactionAPI($this->gateway);
    }

    public function testTransactionAPI() {
        $this->assertNotNull($this->transactionAPI);
    }
}
?>
