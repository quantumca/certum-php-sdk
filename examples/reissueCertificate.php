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
 * Generating the operation reissueCertificate object.
 */

$op = $service->operationReissueCertificate();

/*
 * Setting parameters of the operation.
 * Not all parameters are required.
 * However, a serial number or a certificate has to be set.
 */

$csr = file_get_contents('/path/to/sample.csr');
$pem = file_get_contents('/path/to/sample.pem');

$op->setSerialNumber("1234")->setX509Cert($pem)->setHashAlgorithm('RSA-SHA1')->setCSR($csr);

/*
 * Adding new domain to certificate.
 */
$op->setApproverMethod(PartnerAPITypeVerificationMethodType::FILE);
$op->setApproverEmail('support@example.domain.com');
$op->setVerificationNotificationEnabled(true);
$op->addSANEntry('domain2.example2.com');
$op->addSANEntry('domain2.example3.com');


/*
 * Calling the operation.
 * An order ID is returned in the response.
 */

if ($op->call())
    $id = $op->getOrderID();
else
    die("error");

/*
 * Verification code for domains can also be returned in the response if new domains was added and approve method is FILE or DNS.
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
