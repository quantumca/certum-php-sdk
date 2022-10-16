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
 * Generating the operation modifySNICertificate object.
 */

$op = $service->operationModifySNICertificate();

/*
 * Setting parameters of the operation.
 * Not all parameters are required.
 */

$pem = file_get_contents('/tmp/sample.pem');

$op->setSerialNumber('1234');
/* or */
$op->setX509Cert($pem);

$op->addAddedSerialNumber('1000');
/* or */
$op->addAddedSerialNumber(array('2000', '3000'));

$op->addRemovedSerialNumber('4000');
/* or */
$op->addRemovedSerialNumber(array('5000', '6000'));

$op->setHashAlgorithm('RSA-SHA1');

/*
 * Calling the operation.
 * Accessing the data returned in a response.
 */

if ($op->call()) {
	$invalidSerialNumbers = $op->getInvalidSerialNumbers();
	foreach ($invalidSerialNumbers as $number)
		print $number;
} else
	die("error");
