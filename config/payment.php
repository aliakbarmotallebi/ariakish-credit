<?php

return [
    'sep' => [
        'getTokenUrl' => 'https://sep.shaparak.ir/onlinepg/onlinepg',
        'paymentUrl' => 'https://sep.shaparak.ir/OnlinePG/OnlinePG',
        'verificationUrl' => 'https://sep.shaparak.ir/verifyTxnRandomSessionkey/ipg/VerifyTransaction',
        'terminalId' => '13167368',
        'callbackUrl' => 'https://portal.ariakish.com/panel/payments/callback?gateway=SAMANKISH',
    ],

    'mellat' => [
        'purchaseUrl' => 'https://bpm.shaparak.ir/pgwchannel/services/pgw?wsdl',
        'paymentUrl' => 'https://bpm.shaparak.ir/pgwchannel/startpay.mellat',
        'terminalId' => '6663700',
        'username' => 'Ariakish25',
        'password' => '37512242',
        'callbackUrl' => 'https://portal.ariakish.com/panel/payments/callback?gateway=MELLAT',
    ]
];