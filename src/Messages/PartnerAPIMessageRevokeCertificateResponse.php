<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeRevokeCertificateResponse;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<message name="PartnerServicePortType_revokeCertificateResponse">
    <part element="tns:revokeCertificateResponse" name="revokeCertificateResponse">
    </part>
</message>
<xs:element name="revokeCertificateResponse" nillable="true" type="tns:revokeCertificateResponse"/>
*/

/**
 * This class represents the PartnerServicePortType_revokeCertificateResponse WSDL message.
 *
 * It has one part 'revokeCertificateResponse' accessible as property or by invoking a getter method.
 *
 * @property PartnerAPITypeRevokeCertificateResponse $revokeCertificateResponse
 * @method PartnerAPITypeRevokeCertificateResponse getRevokeCertificateResponse()
 *
 * @package messages
 */
class PartnerAPIMessageRevokeCertificateResponse extends PartnerAPIMessage
{
    /**
     * This method returns initial data for the message's parts.
     *
     * @return array{'revokeCertificateResponse':PartnerAPITypeRevokeCertificateResponse}
     */
    protected function initParts()
    {
        return array(
            'revokeCertificateResponse' => new PartnerAPITypeRevokeCertificateResponse()
        );
    }
}
