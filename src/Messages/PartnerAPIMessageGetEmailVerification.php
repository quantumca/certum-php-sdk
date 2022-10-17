<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeGetEmailVerificationRequest;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<message name="PartnerServicePortType_getEmailVerification">
    <part element="tns:getEmailVerification" name="getEmailVerification">
    </part>
</message>
<xs:element name="getEmailVerification" nillable="true" type="tns:getEmailVerificationRequest"/>
*/

/**
 * This class represents the PartnerServicePortType_getEmailVerification WSDL message.
 *
 * It has one part 'getEmailVerification' accessible as property or by invoking a getter method.
 *
 * @method PartnerAPIMessageGetEmailVerification setCredentials(string $userName, string $password) Overriden method. Read documentation for PartnerAPIMessage class
 * @property PartnerAPITypeGetEmailVerificationRequest $getEmailVerification
 * @method PartnerAPITypeGetEmailVerificationRequest getGetEmailVerification()
 *
 * @package messages
 */
class PartnerAPIMessageGetEmailVerification extends PartnerAPIMessage
{
    /**
     * Defines the part with credentials data.
     *
     * @var string
     */
    protected $partWithCredentials = 'getEmailVerification';

    /**
     * This method returns initial data for the message's parts.
     *
     * @return array{'getEmailVerification':PartnerAPITypeGetEmailVerificationRequest}
     */
    protected function initParts()
    {
        return array(
            'getEmailVerification' => new PartnerAPITypeGetEmailVerificationRequest()
        );
    }
}
