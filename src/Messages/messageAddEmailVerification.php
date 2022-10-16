<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeAddEmailVerificationRequest;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<message name="PartnerServicePortType_addEmailVerification">
    <part name="addEmailVerification" element="tns:addEmailVerification">
    </part>
</message>
<xs:element name="addEmailVerification" nillable="true" type="tns:addEmailVerificationRequest"/>
*/

/**
 * This class represents the PartnerServicePortType_addEmailVerification WSDL message.
 *
 * It has one part 'addEmailVerification' accessible as property or by invoking a getter method.
 *
 * @method PartnerAPIMessageAddEmailVerification setCredentials(string $userName, string $password) Overriden method. Read documentation for PartnerAPIMessage class
 * @property PartnerAPITypeAddEmailVerificationRequest $addEmailVerification
 * @method PartnerAPITypeAddEmailVerificationRequest getAddEmailVerification()
 *
 * @package messages
 */
class PartnerAPIMessageAddEmailVerification extends PartnerAPIMessage
{
    /**
     * Defines the part with credentials data.
     *
     * @var string
     */
    protected $partWithCredentials = 'addEmailVerification';

    /**
     * This method returns initial data for the message's parts.
     *
     * @return array
     */
    protected function initParts()
    {
        return array(
            'addEmailVerification' => new PartnerAPITypeAddEmailVerificationRequest()
        );
    }
}
