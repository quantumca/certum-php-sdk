<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeAddSanVerificationRequest;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<message name="PartnerServicePortType_addSanVerification">
    <part name="addSanVerification" element="tns:addSanVerification">
    </part>
</message>
<xs:element name="addSanVerification" nillable="true" type="tns:addSanVerificationRequest"/>
*/

/**
 * This class represents the PartnerServicePortType_addSanVerification WSDL message.
 *
 * It has one part 'addSanVerification' accessible as property or by invoking a getter method.
 *
 * @method PartnerAPIMessageAddSanVerification setCredentials(string $userName, string $password) Overriden method. Read documentation for PartnerAPIMessage class
 * @property PartnerAPITypeAddSanVerificationRequest $addSanVerification
 * @method PartnerAPITypeAddSanVerificationRequest getAddSanVerification()
 *
 * @package messages
 */
class PartnerAPIMessageAddSanVerification extends PartnerAPIMessage
{

    /**
     * Defines the part with credentials data.
     *
     * @var string
     */
    protected $partWithCredentials = 'addSanVerification';

    /**
     * This method returns initial data for the message's parts.
     *
     * @return array
     */
    protected function initParts()
    {
        return array(
            'addSanVerification' => new PartnerAPITypeAddSanVerificationRequest()
        );
    }
}
