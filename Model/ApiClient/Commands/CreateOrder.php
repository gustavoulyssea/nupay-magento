<?php

declare(strict_types=1);

namespace GumNet\NuPay\Service\ApliClient;


use GumNet\NuPay\Api\ApiClient\Commands\AmountInterface;
use GumNet\NuPay\Api\ApiClient\Commands\OrderDataInterface;
use Magento\Sales\Api\Data\OrderInterface;

class CreateOrder
{

    public const PAYMENT_METHOD = 'paymentMethod';
    public const PAYMENT_METHOD_TYPE = 'type';
    public const SHOPPER = 'shopper';
    public const SHOPPER_REFERENCE = 'reference';
    public const SHOPPER_FIRSTNAME = 'firstName';
    public const SHOPPER_LASTNAME = 'lastName';
    public const SHOPPER_DOCUMENT = 'document';
    public const SHOPPER_DOCUMENT_TYPE = '';

    protected AmountInterface $amount;

    protected OrderDataInterface $orderData;

    public function construct(
        AmountInterface $amount,
        OrderDataInterface $orderData
    ) {
        $this->amount = $amount;

    }

    public function execute(OrderInterface $order): void
    {
        $inputArray = $this->orderData->
        $inputArray[AmountInterface::AMOUNT] = $this->amount->get($order);
    }
}



$json = <<<JSON
{
    "merchantOrderReference": "pix-123432abc",
    "transactionId": "D3AA1FC8372E430E8236649DB5EBD08E",
    "referenceId": "595b6e74-0030-43ab-9b89-8f2ec9923272",
    "merchantName": "Loja Teste",
    "storeName": "Loja Teste Campinas",
    "amount": {
        "value": 10.01,
        "currency": "BRL",
        "details": {}
    },
    "delayToAutoCancel": 15,
    "paymentMethod": {
        "type": "pix"
    },
    "shopper": {
        "reference": "c1245228-1c68-11e6-94ac-0afa86a846a5",
        "firstName": "John",
        "lastName": "Doe",
        "document": "64262091040",
        "documentType": "CPF",
        "email": "john.doe@example.com",
        "phone": {},
        "ip": "255.110.231.231",
        "locale": "pt-BR"
    },
    "shipping": {
        "value": 49.99,
        "company": "Correios",
        "address": {}
    },
    "billingAddress": {
        "country": "BRA",
        "street": "Rua Capote Valente",
        "number": "39",
        "neighborhood": "Pinheiros",
        "postalCode": "05409000",
        "city": "São Paulo",
        "state": "SP"
    },
    "items": [{}],
    "orderUrl": "https://admin.mystore.example.com/orders/v32478982",
    "callbackUrl": "https://api.example.com/some-path/to-notify/status-changes?an=mystore"
}

JSON;
