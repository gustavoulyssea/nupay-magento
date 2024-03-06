<?php

declare(strict_types=1);

namespace GumNet\NuPay\Model\ApiClient\Commands\CreateOrder;

use GumNet\NuPay\Api\ApiClient\Commands\OrderDataInterface;
use GumNet\NuPay\Model\ApiClient\Commands\CreateOrder\OrderData\PaymentUuid;
use Magento\Framework\UrlInterface;
use Magento\Sales\Api\Data\OrderInterface;
use Magento\Store\Model\StoreManagerInterface;

class OrderData implements OrderDataInterface
{
    protected PaymentUuid $paymentUuid;

    /**
     * @var StoreManagerInterface
     */
    protected StoreManagerInterface $storeManager;

    /**
     * @var UrlInterface
     */
    protected UrlInterface $url;

    /**
     * @param PaymentUuid $paymentUuid
     * @param StoreManagerInterface $storeManager
     * @param UrlInterface $url
     */
    public function __construct(
        PaymentUuid $paymentUuid,
        StoreManagerInterface $storeManager,
        UrlInterface $url,
    ) {
        $this->paymentUuid = $paymentUuid;
        $this->storeManager = $storeManager;
        $this->url = $url;
    }

    /**
     * @inheritDoc
     */
    public function get(OrderInterface $order): array
    {
        $result[self::MERCHANT_ORDER_REFERENCE] = $order->getIncrementId();
        $result[self::TRANSACTION_ID] = '?';
        $result[self::REFERENCE_ID_UUID] = $this->paymentUuid->getPaymentUuid($order);
        $result[self::MERCHANT_NAME] = '?';
        $result[self::STORE_NAME] = $this->storeManager->getStore()->getName();
        $result[self::DELAY_TO_AUTO_CANCEL] = '?';
        $result[self::ORDER_URL] = $this->url->getUrl('sales/order/view', ['order_id' => $order->getEntityId()]);
        $result[self::CALLBACK_URL] = $this->url->getUrl('callbackUrl');
        return $result;
    }
}
