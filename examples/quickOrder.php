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
 * Important:
 * Before calling the quickOrder operation you should call
 * the validateOrderParameters operation to verify the parameters
 * of a request.
 * Details of each operation's order and requirements are contained in
 * the PDF documentation for the web service.
 */

/*
 * Generating the operation quickOrder object.
 */

$op = $service->operationQuickOrder();

/*
 * Setting parameters of the operation.
 * Not all parameters are required.
 * In particular, setting SANEntry and Approver parameters is dependent
 * on the type of the product being ordered.
 */


$csr = file_get_contents('/path/to/sample.csr');

$op->setCSR($csr)->setCustomer('A customer name')->setOrderID('12345')->setProductCode('721')
        ->setUserAgent('User agent')->setHashAlgorithm(PartnerAPITypeHashAlgorithmEnum::RSA_SHA1)->setEmail('abc@example.com');
$op->setRequestorInfo('First Name', 'Last Name', 'email@example.org', '11223344');
$op->setLanguage('en')->setShortenedValidityPeriod('2021-12-01')
        ->setOrganizationInfo('An organization name', '11111111');
$op->setRevocationContactEmail('revocations@example.org');

/*
 * Example of setting FILE approve method.
 */
$op->setApproverMethod(PartnerAPITypeVerificationMethodType::FILE);
$op->setApproverEmail('support@example.domain.com');

/*
 * Example of setting DNS approve method.
 */
//$op->setApproverMethod(PartnerAPITypeVerificationMethodType::DNS);
//$op->setApproverEmail('support@example.domain.com');

/*
 * Example of setting EMAIL approve method.
 */
//$op->setApproverMethod(PartnerAPITypeVerificationMethodType::EMAIL);
//$op->setApproverEmailPrefix(PartnerAPITypeApproverEmailPrefixType::HOSTMASTER);

$op->setVerificationNotificationEnabled(true);
$op->addSANEntry('domain1.example.com');

/*
 * Calling the operation.
 * An order ID is returned in the response.
 */

if ($op->call())
    $id = $op->getOrderID();
else
    die("error");

/*
 * Verification code for domains can also be returned in the response if approve method is FILE or DNS.
 */

if ($op->call()) {
    $id = $op->getOrderID();
    $verification = $op->getSANVerification();

    if (!is_null($verification)) {
        print $verification->approverMethod;
        print $verification->code;
        print $verification->approverEmail;

        foreach ($verification->FQDNs->getDataAsArray() as $fqdn) {
            print $fqdn;
        }
    }
} else
    die("error");

/*
 * Note:
 * Before the quickOrder operation you should call the validateOrderParameters
 * operation. Both operations use the same set of parameters.
 * Therefore, an object of the validateOrderParameters operation
 * has the prepareQuickOrderOperation() method which returns an object of
 * quickOrder operation with all the parameters already prepared.
 * Of course, there is no point to call this method if
 * the validateOrderParameters operation failed.
 */

$op = $service->operationValidateOrderParameters();
// setting parameters and calling the operation
$op2 = $op->prepareQuickOrderOperation();
// if verification e-mails are to be sent, the VerificationNotificationEnabled
// option have to be enabled separately because the operation
// ValidateOrderParameters does not have this option
$op2->setVerificationNotificationEnabled(true);
if ($op2->call())
    $id = $op2->getOrderID();
else
    die("error");
