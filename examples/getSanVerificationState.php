<?php

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

use Certum\Sdk\PartnerAPIService;

/*
 * Creating a service object. See start.php file.
 */

$service = new PartnerAPIService('userName', 'password');

/*
 * Generating the operation getSanVerificationState object.
 */

$op = $service->operationGetSanVerificationState();

/*
 * Setting required parameter orderId of the operation.
 */

$op->setOrderID('1234');

/*
 * Calling the operation.
 */

if ($op->call())
    $verifications = $op->getSanVerifications();
else
    die("error");

/*
 * Accessing the data returned in the response.
 * Please notice that not all fields are available in the response
 * and their availability depends on the options selected for the request.
 */

foreach ($verifications as $verification) {
    print $verification->FQDN;

    $manual = $verification->manualVerification;
    print $manual->state;
    print $manual->expireDate;
    print $manual->info;

    $systemVerifications = $verification->systemVerification;

    foreach ($systemVerifications->method as $method) {
        print $method;
    }
}
