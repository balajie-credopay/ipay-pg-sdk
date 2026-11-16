<?php
namespace IPay;

class Config {
    public const BASE_URL = 'https://pgw-api-uat.ipay.com.qa/nac/api/v1';
    public const CREATE_ORDER_URL = self::BASE_URL . '/pg/orders/create-checkout';
    public const CHECK_STATUS_URL = self::BASE_URL . '/pg/orders/check-status';
}
?>