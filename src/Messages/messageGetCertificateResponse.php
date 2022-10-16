<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeGetCertificateResponse;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<message name="PartnerServicePortType_getCertificateResponse">
    <part element="tns:getCertificateResponse" name="getCertificateResponse">
    </part>
</message>
<xs:element name="getCertificateResponse" nillable="true" type="tns:getCertificateResponse"/>
*/

/**
 * This class represents the PartnerServicePortType_getCertificateResponse WSDL message.
 *
 * It has one part 'getCertificateResponse' accessible as property or by invoking a getter method.
 *
 * @property PartnerAPITypeGetCertificateResponse $getCertificateResponse
 * @method PartnerAPITypeGetCertificateResponse getGetCertificateResponse()
 *
 * @package messages
 */
class PartnerAPIMessageGetCertificateResponse extends PartnerAPIMessage
{
    /**
     * This method returns initial data for the message's parts.
     *
     * @return array
     */
    protected function initParts()
    {
        return array(
            'getCertificateResponse' => new PartnerAPITypeGetCertificateResponse()
        );
    }
}
