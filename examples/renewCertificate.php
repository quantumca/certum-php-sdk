<?php
/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

use Certum\Sdk\PartnerAPIService;
use Certum\Sdk\Types\PartnerAPITypeVerificationMethodType;

/*
 * Creating a service object. See start.php file.
 */

$service = new PartnerAPIService('userName', 'password');

/*
 * Generating the operation renewCertificate object.
 */

$op = $service->operationRenewCertificate();

/*
 * Setting parameters of the operation.
 */

$csr = file_get_contents('/path/to/sample.csr');

$op->setCSR($csr)->setCustomer('Customer name')->setProductCode('606');
// The requirement is to pass either a serial number
$op->setSerialNumber('00:11:22:33:44:55:66:77:88:99:aa:bb:cc:dd:ee:ff');
// or a certificate to be renewed
$op->setX509Cert($x509cert);
// optionally a custom expiration date can be defined
$op->setShortenedValidityPeriod('2021-12-01');
// optionally a hash algorithm
$op->setHashAlgorithm('RSA-SHA1');
$op->setRevocationContactEmail('revocations@example.org');

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

$op->setVerificationNotificationEnabled(true);

/*
 * Calling the operation.
 * An order ID is returned in the response.
 */

if ($op->call())
    $id = $op->getOrderID();
else
    die("error");

/*
 * Verification codes for domains can also be returned in the response.
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
