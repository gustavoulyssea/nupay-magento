<?php

declare(strict_types=1);

use GumNet\NuPay\Api\ApiClient\Commands\AmountInterface;
use Magento\Sales\Api\Data\OrderInterface;

class Amount implements AmountInterface
{
    /**
     * @inheritDoc
     */
    public function get(OrderInterface $order): array
    {
        $result[self::AMOUNT_VALUE] = $order->getGrandTotal();
        $result[self::AMOUNT_CURRENCY] = $order->getOrderCurrencyCode();
        $result[self::AMOUNT_DETAILS] = [];
        return $result;
    }
}
