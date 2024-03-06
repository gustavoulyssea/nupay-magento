<?php

declare(strict_types=1);

namespace GumNet\NuPay\Api\ApiClient\Commands;

use Magento\Sales\Api\Data\OrderInterface;

interface OrderDataInterface
{
    public const MERCHANT_ORDER_REFERENCE = 'merchantOrderReference';
    public const TRANSACTION_ID = 'transactionId'; //     "transactionId": "D3AA1FC8372E430E8236649DB5EBD08E",
    public const REFERENCE_ID_UUID = 'referenceId'; //     "referenceId": "595b6e74-0030-43ab-9b89-8f2ec9923272d45456",
    public const MERCHANT_NAME = 'merchantName';
    public const STORE_NAME = 'storeName';
    public const DELAY_TO_AUTO_CANCEL = 'delayToAutoCancel';

    public const ORDER_URL = 'orderUrl'; // https://admin.mystore.example.com/orders/v32478982
    public const CALLBACK_URL = 'callbackUrl'; // https://api.example.com/some-path/to-notify/status-changes?an=mystore

    /**
     * @param OrderInterface $order
     * @return array
     */
    public function get(OrderInterface $order): array;

}
