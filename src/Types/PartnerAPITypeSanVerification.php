<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

/*
<xs:complexType name="sanVerification">
    <xs:sequence>
        <xs:element name="approverMethod" type="tns:verificationMethodType"/>
        <xs:element name="code" type="xs:string"/>
        <xs:element name="approverEmail" type="xs:string"/>
        <xs:element name="FQDNs" type="tns:FQDNs"/>
    </xs:sequence>
</xs:complexType>
*/

/**
 * This class represents the sanVerification WSDL type.
 *
 * It is based on the PartnerAPIType class and derives properties and methods from that class.
 *
 * @method PartnerAPITypeSanVerification setApproverMethod(string $value) Sets the approverMethod element.
 * @method string getApproverMethod() Gets the approverMethod element.
 * @property string $approverMethod Gets the approverMethod element.
 *
 * @method PartnerAPITypeSanVerification setCode(string $value) Sets the code element.
 * @method string getCode() Gets the code element.
 * @property string $code Gets the code element.
 *
 * @method PartnerAPITypeSanVerification setApproverEmail(string $value) Sets the approverEmail element.
 * @method string getApproverEmail() Gets the approverEmail element.
 * @property string $approverEmail Gets the approverEmail element.
 *
 * @method PartnerAPITypeSanVerification setFQDNs(PartnerAPITypeFQDNs $value) Sets the FQDNs element.
 * @method PartnerAPITypeFQDNs getFQDNs() Gets the FQDNs element.
 * @property PartnerAPITypeFQDNs $FQDNs Gets the FQDNs element.
 *
 * @package types
 */
class PartnerAPITypeSanVerification extends PartnerAPIType
{
    protected function initData()
    {
        $n = array(
            'approverMethod' => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'code'           => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'approverEmail'  => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'FQDNs'          => array('min' => 1, 'max' => 1, 'value' => new PartnerAPITypeFQDNs(), 'type' => 'PartnerAPITypeFQDNs', 'nillable' => false)
        );
        return $n;
    }
}
