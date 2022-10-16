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
 * Generating the operation addSanVerification object.
 */

$op = $service->operationAddSanVerification();


/*
 * Setting required parameter orderID of the operation.
 */

$op->setOrderID('1234');

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
 * Verification code for domains can also be returned in the response if approve method is FILE or DNS.
 */

if ($op->call()) {
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
