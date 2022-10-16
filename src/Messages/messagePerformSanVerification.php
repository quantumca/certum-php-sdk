<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeDomainVerificationRequest;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<message name="PartnerServicePortType_performSanVerification">
    <part name="performSanVerification" element="tns:performSanVerification">
    </part>
</message>
<xs:element name="performSanVerification" nillable="true" type="tns:domainVerificationRequest"/>
*/

/**
 * This class represents the PartnerServicePortType_performSanVerification WSDL message.
 *
 * It has one part 'performSanVerification' accessible as property or by invoking a getter method.
 *
 * @method PartnerAPIMessagePerformSanVerification setCredentials(string $userName, string $password) Overriden method. Read documentation for PartnerAPIMessage class
 * @property PartnerAPITypeDomainVerificationRequest $performSanVerification
 * @method PartnerAPITypeDomainVerificationRequest getPerformSanVerification()
 *
 * @package messages
 */
class PartnerAPIMessagePerformSanVerification extends PartnerAPIMessage
{
    /**
     * Defines the part with credentials data.
     *
     * @var string
     */
    protected $partWithCredentials = 'performSanVerification';

    /**
     * This method returns initial data for the message's parts.
     *
     * @return array
     */
    protected function initParts()
    {
        return array(
            'performSanVerification' => new PartnerAPITypeDomainVerificationRequest()
        );
    }
}
