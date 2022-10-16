<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="revokeCertificateRequest">
   <xs:complexContent>
        <xs:extension base="tns:request">
          <xs:sequence>
              <xs:element name="revokeCertificateParameters" type="tns:revokeCertificateParameters"/>
            </xs:sequence>
     </xs:extension>
    </xs:complexContent>
</xs:complexType>
*/

/**
 * This class represents the revokeCertificateRequest WSDL type.
 *
 * It is an extension to the PartnerAPITypeRequest class.
 *
 * @method PartnerAPITypeRevokeCertificateRequest setRevokeCertificateParameters(PartnerAPITypeRevokeCertificateParameters $value) Sets the revokeCertificateParameters element.
 * @method PartnerAPITypeRevokeCertificateParameters getRevokeCertificateParameters() Gets the revokeCertificateParameters element.
 * @property PartnerAPITypeRevokeCertificateParameters $revokeCertificateParameters Gets the revokeCertificateParameters element.
 *
 * @package types
 */
class PartnerAPITypeRevokeCertificateRequest extends PartnerAPITypeRequest
{
    protected function initData()
    {
        $p = parent::initData();
        $n = array(
            'revokeCertificateParameters' => array('min' => 1, 'max' => 1, 'value' => new PartnerAPITypeRevokeCertificateParameters(), 'type' => 'PartnerAPITypeRevokeCertificateParameters', 'nillable' => false)
        );
        $n = array_merge($p, $n);
        return $n;
    }
}
