<?php

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

use Certum\Sdk\PartnerAPIService;
use Certum\Sdk\Types\PartnerAPITypeHashAlgorithmEnum;
use Certum\Sdk\Types\PartnerAPITypeVerificationMethodType;

/*
 * Creating a service object. See start.php file.
 */

$service = new PartnerAPIService('userName', 'password');

/*
 * Generating the operation validateOrderParameters object.
 */

$op = $service->operationValidateOrderParameters();

/*
 * Setting parameters of the operation.
 * Some parameters are not required.
 * In particular, setting SANEntry and Approver parameters is dependent
 * on the type of the product being ordered.
 */


$csr = file_get_contents('/path/to/sample.csr');

$op->setCSR($csr)->setCustomer('A customer name')->setOrderID('12345')->setProductCode('721')
    ->setUserAgent('User agent')->setHashAlgorithm(PartnerAPITypeHashAlgorithmEnum::RSA_SHA1)->setEmail('abc@example.com');
$op->setRequestorInfo('First Name', 'Last Name', 'email@example.org', '11223344');
$op->setLanguage('en')->setShortenedValidityPeriod('2021-12-01')
    ->setOrganizationInfo('An organization name', '11111111');

/*
 * Example of setting FILE approver method.
 */
$op->setApproverMethod(PartnerAPITypeVerificationMethodType::FILE);
$op->setApproverEmail('support@example.domain.com');

/*
 * Example of setting DNS approver method.
 */
//$op->setApproverMethod(PartnerAPITypeVerificationMethodType::DNS);
//$op->setApproverEmail('support@example.domain.com');

/*
 * Example of setting EMAIL approver method.
 */
//$op->setApproverMethod(PartnerAPITypeVerificationMethodType::EMAIL);
//$op->setApproverEmailPrefix(PartnerAPITypeApproverEmailPrefixType::HOSTMASTER);

$op->addSANEntry('domain1.example.com');

if ($op->call())
    $p = $op->getParsedCSR();
else
    die("error");

/*
 * Now you can access all the fields of parsed CSR.
 * They are either a string or null.
 */

print $p->commonName;
print $p->country;
print $p->email;
print $p->joILN;
print $p->joISoCN;
print $p->joISoPN;
print $p->businessCategory;
print $p->locality;
print $p->organization;
print $p->organizationalUnit;
print $p->postalCode;
print $p->serialNumber;
print $p->state;
print $p->streetAddress;
