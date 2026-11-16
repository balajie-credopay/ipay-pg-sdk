<?php
use PHPUnit\Framework\TestCase;
use IPay\IPayPaymentGateway;

class IPayPaymentGatewayTest extends TestCase {
    public function testHandleRequest() {
        $gateway = new IPayPaymentGateway('65a621098498347eeecfe0a0', 'g2dSScWNGQwd4DMWjy8rOFptP');
        $this->expectException(Exception::class);
        $gateway->handleRequest('GET', 'http://example.com');
    }
}
?>
