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
 * Generating the operation addEmailVerification object.
 */

$op = $service->operationAddEmailVerification();

/*
 * Setting required parameter orderID of the operation.
 */

$op->setOrderID('1234');

/*
 * Calling the operation.
 * Response contains only responseHeader object.
 */

if ($op->call())
    $header = $op->getResponseHeader();
else
    die("error");
