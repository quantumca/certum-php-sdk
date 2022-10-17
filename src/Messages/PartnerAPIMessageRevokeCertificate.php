<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeRevokeCertificateRequest;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<message name="PartnerServicePortType_revokeCertificate">
    <part element="tns:revokeCertificate" name="revokeCertificate">
    </part>
</message>
<xs:element name="revokeCertificate" nillable="true" type="tns:revokeCertificateRequest"/>
*/

/**
 * This class represents the PartnerServicePortType_revokeCertificate WSDL message.
 *
 * It has one part 'revokeCertificate' accessible as property or by invoking a getter method.
 *
 * @method PartnerAPIMessageRevokeCertificate setCredentials(string $userName, string $password) Overriden method. Read documentation for PartnerAPIMessage class
 * @property PartnerAPITypeRevokeCertificateRequest $revokeCertificate
 * @method PartnerAPITypeRevokeCertificateRequest getRevokeCertificate()
 *
 * @package messages
 */
class PartnerAPIMessageRevokeCertificate extends PartnerAPIMessage
{
    /**
     * Defines the part with credentials data.
     *
     * @var string
     */
    protected $partWithCredentials = 'revokeCertificate';

    /**
     * This method returns initial data for the message's parts.
     *
     * @return array{'revokeCertificate':PartnerAPITypeRevokeCertificateRequest}
     */
    protected function initParts()
    {
        return array(
            'revokeCertificate' => new PartnerAPITypeRevokeCertificateRequest()
        );
    }
}
