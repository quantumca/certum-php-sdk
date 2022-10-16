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
 * Generating the operation cancelOrder object.
 */

$op = $service->operationCancelOrder();

/*
 * Setting parameters of the operation.
 */

$op->setOrderID('1234')->setNote('Note');

/*
 * Calling the operation.
 */

if ($op->call())
    print "OK";
else
    die("error");
