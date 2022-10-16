<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeGetSanVerificationStateRequest;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

/*
<message name="PartnerServicePortType_getSanVerificationState">
    <part name="getSanVerificationState" element="tns:getSanVerificationState">
    </part>
</message>
<xs:element name="getSanVerificationState" nillable="true" type="tns:getSanVerificationStateRequest"/>
*/

/**
 * This class represents the PartnerServicePortType_getSanVerificationState WSDL message.
 *
 * It has one part 'getSanVerificationState' accessible as property or by invoking a getter method.
 *
 * @method PartnerAPIMessageGetSanVerificationState setCredentials(string $userName, string $password) Overriden method. Read documentation for PartnerAPIMessage class
 * @property PartnerAPITypeGetSanVerificationStateRequest $getSanVerificationState
 * @method PartnerAPITypeGetSanVerificationStateRequest getGetSanVerificationState()
 *
 * @package messages
 */
class PartnerAPIMessageGetSanVerificationState extends PartnerAPIMessage
{

    /**
     * Defines the part with credentials data.
     *
     * @var string
     */
    protected $partWithCredentials = 'getSanVerificationState';

    /**
     * This method returns initial data for the message's parts.
     *
     * @return array
     */
    protected function initParts()
    {
        return array(
            'getSanVerificationState' => new PartnerAPITypeGetSanVerificationStateRequest()
        );
    }
}
