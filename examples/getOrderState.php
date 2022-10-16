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
 * Generating the operation getOrderState object.
 */

$op = $service->operationGetOrderState();

/*
 * Setting one parameter of the operation - orderID.
 */

$op->setOrderID('1234');

/*
 * Calling the operation.
 */

if ($op->call())
    $orderVerifications = $op->getOrderVerifications();
else
    die("error");

/*
 * Accessing the data returned in the response.
 * Please notice that field expireDate might not be present.
 */

print $op->getLastUpdateDate();
print $op->getOrderStatus();

foreach ($orderVerifications as $verification) {
        print $verification->expireDate;
        print $verification->state;
        print $verification->type;
}
