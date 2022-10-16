<?php

/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

use Certum\Sdk\PartnerAPIService;
use Certum\Sdk\Types\PartnerAPITypeDocumentTypeEnum;

/*
 * Creating a service object. See start.php file.
 */

$service = new PartnerAPIService('userName', 'password');

/*
 * Generating the operation verifyOrder object.
 */

$op = $service->operationVerifyOrder();

/*
 * Setting parameters of the operation.
 */

$op->setOrderID('1234')->setNote('Note');

/*
 * Optionally, adding a document.
 */

$op->addDocument(
    PartnerAPITypeDocumentTypeEnum::PASSPORT,
    "Passport",
    array('fileName' => 'fileContents')
);

/*
 * Calling the operation.
 */

if ($op->call()) {
    $header = $op->getResponseHeader();
} else {
    die("error");
}
