# IPay Payment Gateway

IPay Payment Gateway is a PHP library that provides an easy-to-use interface for interacting with the IPay payment gateway API. This library allows you to create checkout orders and check order statuses securely and efficiently.

## Installation

You can install the package via Composer. Run the following command:

```bash

composer require ipay/paymentgateway

```
## Sample Integration Setup

After installing the package using Composer, create a PHP file named UsageExample.php in your project root directory.

Your project structure should look like this:

your-project/
├── vendor/
│   ├── autoload.php
│   └── ipay/
│       └── paymentgateway/
├── composer.json
├── composer.lock
└── UsageExample.php

Add the following code at the beginning of your UsageExample.php file to load the SDK:

<?php

require_once __DIR__ . '/vendor/autoload.php';

use IPay\IPayPaymentGateway;

You can now use the SDK to initialize the payment gateway, create orders, and check order statuses.

To execute your integration example, run:

php UsageExample.php

## Features

* **Order Management**: Create and manage orders through IPay.
* **Transaction Management**: Transaction API support is planned for future enhancements.
* **Secure Authentication**: Uses secure basic authentication for API requests.
* **System Information**: Attaches system and server information to each request for better tracking and security.

## Requirements

&#x20;   - PHP 7.4 or higher
- Composer
- cURL extension enabled
- IPay API credentials (Client ID and Client Secret)



## Usage

## Initialization

```php
require_once __DIR__ . '/vendor/autoload.php';

use IPay\IPayPaymentGateway;

// Initialize the payment gateway
$clientId = 'your-client-id';
$clientSecret = 'your-client-secret';
$gateway = new IPayPaymentGateway($clientId, $clientSecret);

// Initialize the OrderAPI
$orderAPI = $gateway->order;

```

## Creating an Order

```php

$orderData = [
    'receiptId' => 'RE_YOURRECEIPT123',
    'amount' => 1,
    'currency' => 'QAR',
    'description' => 'Test Payment',
    'customerFields' => [
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'phone' => '90000000'
    ],
    'uiMode' => 'checkout',
    'redirectType' => 'redirect'
];

try {
    $orderResponse = $orderAPI->createOrder($orderData);
    echo "Order Response: " . $orderResponse;

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

```

## Checking Order Status

```php

try {
    $orderId = 'your-order-id'; // Replace with an actual order ID
    $statusResponse = $orderAPI->checkStatus($orderId);
    echo "Order Status: " . $statusResponse;
} catch (Exception $e) {
     echo "Error: " . $e->getMessage();
}

```
## API Endpoints

&#x20;   - Create Order: POST https://pgw-api-uat.ipay.com.qa/nac/api/v1/pg/orders/create-checkout

&#x20;   - Check Order Status: GET https://pgw-api-uat.ipay.com.qa/nac/api/v1/pg/orders/check-status


## Project Structure

```graphql

src/
├── Config.php            # Contains API endpoints and configurations
├── IPayPaymentGateway.php  # Handles HTTP requests
└── resources/
    ├── OrderAPI.php      # Methods for order operations
    └── TransactionAPI.php # Placeholder for future enhancements
```

## Contributing

Contributions are welcome! Feel free to submit issues or pull requests to enhance the library.



