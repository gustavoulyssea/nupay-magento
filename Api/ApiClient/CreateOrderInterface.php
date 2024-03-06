<?php

declare(strict_types=1);

namespace GumNet\NuPay\Service\ApliClient;


interface CreateOrderInterface
{
    public const AMOUNT = 'amount';
    public const AMOUNT_VALUE = 'value';
    public const AMOUNT_CURRENCY = 'currency'; // BRL
    public const AMOUNT_DETAILS = 'details'; // {}
    public const PAYMENT_METHOD = 'paymentMethod';
    public const PAYMENT_METHOD_TYPE = 'type';

    // Shopper start
    public const SHOPPER = 'shopper';
    public const SHOPPER_REFERENCE = 'reference';
    public const SHOPPER_FIRSTNAME = 'firstName';
    public const SHOPPER_LASTNAME = 'lastName';
    public const SHOPPER_DOCUMENT = 'document';
    public const SHOPPER_DOCUMENT_TYPE = 'documentType'; // CPF / CNPJ
    public const SHOPPER_EMAIL = 'email';
    public const SHOPPER_PHONE = 'phone'; // {}
    public const SHOPPER_IP = 'ip';
    public const SHOPPER_LOCALE = 'locale'; // pt-BR
    // Shopper end

    // Shipping start
    public const SHIPPING = 'shipping';
    public const SHIPPING_VALUE = 'value';
    public const SHIPPING_COMPANY = 'company'; // Correios
    public const SHIPPING_ADDRESS = 'address'; // {}
    // Shipping end

    // Billing start
    public const BILLING_ADDRESS = 'billingAddress';
    public const BILLING_ADDRESS_COUNTRY = 'country';
    public const BILLING_ADDRESS_STREET = 'street';
    public const BILLING_ADDRESS_NUMBER = 'number'; // string
    public const BILLING_ADDRESS_NEIGHBORHOOD = 'neighborhood';
    public const BILLING_ADDRESS_POSTALCODE = 'postalCode'; // somente numeros
    public const BILLING_ADDRESS_CITY = 'city';
    public const BILLING_ADDRESS_STATE = 'state'; // SP
    // BILLING END

    public const ITEMS = 'items'; // [{}]
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
