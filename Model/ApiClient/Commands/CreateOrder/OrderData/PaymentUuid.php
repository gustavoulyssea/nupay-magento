<?php

namespace GumNet\NuPay\Model\ApiClient\Commands\CreateOrder\OrderData;

use GumNet\NuPay\Api\ApiClient\Commands\OrderDataInterface;
use Magento\Sales\Api\Data\OrderInterface;
use Ramsey\Uuid\Uuid;

class PaymentUuid
{
    public function getPaymentUuid(OrderInterface $order): string
    {
        $payment = $order->getPayment();
        if ($uuid = $order->getPayment()->getAdditionalInformation(OrderDataInterface::REFERENCE_ID_UUID)) {
            return $uuid;
        }
        $uuid = Uuid::uuid4()->toString();
        $payment->setAdditionalInformation(OrderDataInterface::REFERENCE_ID_UUID, $uuid);
        return $uuid;
    }
}
