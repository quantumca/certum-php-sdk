<?php
/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

use Certum\Sdk\PartnerAPIService;
use Certum\Sdk\Types\PartnerAPITypeRevocationReasonEnum;

/*
 * Creating a service object. See start.php file.
 */

$service = new PartnerAPIService('userName', 'password');

/*
 * Generating the operation revokeCertificate object.
 */

$op = $service->operationRevokeCertificate();

/*
 * Setting parameters of the operation.
 * Only serialNumber is required.
 */

$op->setSerialNumber('00:11:22:33:44:55:66:77:88:99:aa:bb:cc:dd:ee:ff')
   ->setNote('Notatka')->setKeyCompromitationDate('2013-05-01')
   ->setRevocationReason(PartnerAPITypeRevocationReasonEnum::KEYCOMPROMISE);

/*
 * Calling the operation.
 */

if ($op->call())
    print "OK";
else
    die("error");
