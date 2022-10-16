<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="emailVerification">
  <xs:sequence>
      <xs:element name="email" type="xs:string"/>
        <xs:element name="verified" type="xs:boolean"/>
        <xs:element name="sendDate" type="xs:dateTime"/>
       <xs:element name="verificationLinkValidityDate" type="xs:dateTime"/>
       <xs:element name="verificationDate" type="xs:dateTime"/>
       <xs:element minOccurs="0" name="verificationValidity" type="xs:dateTime"/>
 </xs:sequence>
</xs:complexType>
*/

/**
 * This class represents the emailVerification WSDL type.
 *
 * It is based on the PartnerAPIType class and derives properties and methods from that class.
 *
 * @method PartnerAPITypeEmailVerification setEmail(string $value) Sets the email element.
 * @method string getEmail() Gets the email element.
 * @property string $email Gets the email element.
 *
 * @method PartnerAPITypeEmailVerification setVerified(boolean $value) Sets the verified element.
 * @method boolean getVerified() Gets the verified element.
 * @property boolean $verified Gets the verified element.
 *
 * @method PartnerAPITypeEmailVerification setSendDate(string $value) Sets the sendDate element.
 * @method string getSendDate() Gets the sendDate element.
 * @property string $sendDate Gets the sendDate element.
 *
 * @method PartnerAPITypeEmailVerification setVerificationLinkValidityDate(string $value) Sets the verificationLinkValidityDate element.
 * @method string getVerificationLinkValidityDate() Gets the verificationLinkValidityDate element.
 * @property string $verificationLinkValidityDate Gets the verificationLinkValidityDate element.
 *
 * @method PartnerAPITypeEmailVerification setVerificationDate(string $value) Sets the verificationDate element.
 * @method string getVerificationDate() Gets the verificationDate element.
 * @property string $verificationDate Gets the verificationDate element.
 *
 * @method PartnerAPITypeEmailVerification setVerificationValidity(string $value) Sets the verificationValidity element.
 * @method string getVerificationValidity() Gets the verificationValidity element or NULL.
 * @property string $verificationValidity Gets the verificationValidity element or NULL.
 *
 * @package types
 */
class PartnerAPITypeEmailVerification extends PartnerAPIType
{
    protected function initData()
    {
        $n = array(
            'email'                        => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'verified'                     => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'boolean', 'nillable' => false),
            'sendDate'                     => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'verificationLinkValidityDate' => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'verificationDate'             => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'verificationValidity'         => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false)
        );
        return $n;
    }
}
