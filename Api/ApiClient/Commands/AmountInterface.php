<?php

declare(strict_types=1);

namespace GumNet\NuPay\Api\ApiClient\Commands;

use Magento\Sales\Api\Data\OrderInterface;

interface AmountInterface
{
    public const AMOUNT = 'amount';
    public const AMOUNT_VALUE = 'value';
    public const AMOUNT_CURRENCY = 'currency'; // BRL
    public const AMOUNT_DETAILS = 'details'; // {}

    /**
     * Get amount data for JSON
     *
     * @param OrderInterface $order
     * @return array
     */
    public function get(OrderInterface $order): array;
}
