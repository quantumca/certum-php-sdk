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
 * Generating the operation getApproverList object.
 */

$op = $service->operationGetExpiringCertificates();

/*
 * Setting parameters of the operation.
 */

$op->setValidityDaysLeft(30)->setPageNumber(1);

/*
 * Calling the operation.
 */

if ($op->call())
    $certificates = $op->getExpiringCertificates();
else
    die("error");

/*
 * Accessing the data returned in the response.
 */

foreach ($certificates as $certificate) {
    print $certificate->serialNumber;
    print $certificate->expiringDate;
    print $certificate->validityDaysLeft;
    print $certificate->orderID;
}
