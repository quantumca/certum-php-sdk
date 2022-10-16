<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="sanApprover">
    <xs:sequence>
        <xs:element name="approverMethod" type="tns:verificationMethodType"/>
        <xs:element minOccurs="0" name="approverEmail" type="xs:string"/>
        <xs:element minOccurs="0" name="approverEmailPrefix" type="tns:approverEmailPrefixType"/>
        <xs:element minOccurs="0" name="verificationNotificationEnabled" type="xs:boolean"/>
    </xs:sequence>
</xs:complexType>
*/

/**
 * This class represents the SanApprover WSDL type.
 *
 * It is based on the PartnerAPIType class and derives properties and methods from that class.
 *
 * @method PartnerAPITypeSanApprover setApproverEmailPrefix(string $value) Sets the approverEmailPrefix element.
 * @method string getApproverEmailPrefix() Gets the approverEmailPrefix element.
 * @property string $approverEmailPrefix Gets the approverEmailPrefix element.
 *
 * @method PartnerAPITypeSanApprover setApproverEmail(string $value) Sets the approverEmail element.
 * @method string getApproverEmail() Gets the approverEmail element or NULL.
 * @property string $approverEmail Gets the approverEmail element or NULL.
 *
 * @method PartnerAPITypeApprover setApproverMethod(string $value) Sets the approverMethod element.
 * @method string getApproverMethod() Gets the approverMethod element or NULL.
 * @property string $approverMethod Gets the approverMethod element or NULL.
 *
 * @method PartnerAPITypeSanApprover setVerificationNotificationEnabled(boolean $value) Sets the verificationNotificationEnabled element.
 * @method boolean getVerificationNotificationEnabled() Gets the verificationNotificationEnabled element or NULL.
 * @property boolean $verificationNotificationEnabled Gets the verificationNotificationEnabled element or NULL.
 *
 * @package types
 */
class PartnerAPITypeSanApprover extends PartnerAPIType
{
    protected function initData()
    {
        $n = array(
            'approverEmailPrefix'             => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'approverEmail'                   => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'approverMethod'                   => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'verificationNotificationEnabled' => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'boolean', 'nillable' => false)
        );
        return $n;
    }
}
