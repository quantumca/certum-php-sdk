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
 * Generating the operation orderSNICertificate object.
 */

$op = $service->operationOrderSNICertificate();

/*
 * Setting parameters of the operation.
 * Not all parameters are required.
 */

$csr = file_get_contents('/tmp/sample.csr');

$op->setCSR($csr)->setLanguage('en')->setHashAlgorithm('RSA-SHA1');
$op->setRequestorInfo('First Name', 'Last Name', 'email@example.org', '11223344');
$op->setOrganizationInfo('11111111', '+486666333777');
$op->addSerialNumber('1000');
/* or */
$op->addSerialNumber(array('2000', '3000'));

/*
 * Calling the operation.
 * Accessing the data returned in a response.
 */

if ($op->call()) {
	print $op->getOrderID();
	$invalidSerialNumbers = $op->getInvalidSerialNumbers();
	foreach ($invalidSerialNumbers as $number)
		print $number;
}
else
	die("error");
