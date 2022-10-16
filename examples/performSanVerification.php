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
 * Generating the operation performSanVerification object.
 */

$op = $service->operationPerformSanVerification();

/*
 * Setting required parameter code of the operation.
 */

$op->setCode('1234');

/*
 * Calling the operation.
 * Response contains only responseHeader object.
 */

if ($op->call())
    $header = $op->getResponseHeader();
else
    die("error");
