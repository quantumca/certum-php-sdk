<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="parsedCsr">
  <xs:sequence>
      <xs:element minOccurs="0" name="commonName" type="xs:string"/>
     <xs:element minOccurs="0" name="country" type="xs:string"/>
        <xs:element minOccurs="0" name="email" type="xs:string"/>
      <xs:element minOccurs="0" name="joISoCN" type="xs:string"/>
        <xs:element minOccurs="0" name="joILN" type="xs:string"/>
      <xs:element minOccurs="0" name="joISoPN" type="xs:string"/>
        <xs:element minOccurs="0" name="locality" type="xs:string"/>
       <xs:element minOccurs="0" name="organization" type="xs:string"/>
       <xs:element minOccurs="0" name="organizationalUnit" type="xs:string"/>
     <xs:element minOccurs="0" name="postalCode" type="xs:string"/>
     <xs:element minOccurs="0" name="serialNumber" type="xs:string"/>
       <xs:element minOccurs="0" name="streetAddress" type="xs:string"/>
      <xs:element minOccurs="0" name="state" type="xs:string"/>
  </xs:sequence>
</xs:complexType>
*/

/**
 * This class represents the parsedCsr WSDL type.
 *
 * It is based on the PartnerAPIType class and derives properties and methods from that class.
 *
 * @method PartnerAPITypeParsedCsr setCommonName(string $value) Sets the commonName element.
 * @method string getCommonName() Gets the commonName element or NULL.
 * @property string $commonName Gets the commonName element or NULL.
 *
 * @method PartnerAPITypeParsedCsr setCountry(string $value) Sets the country element.
 * @method string getCountry() Gets the country element or NULL.
 * @property string $country Gets the country element or NULL.
 *
 * @method PartnerAPITypeParsedCsr setEmail(string $value) Sets the email element.
 * @method string getEmail() Gets the email element or NULL.
 * @property string $email Gets the email element or NULL.
 *
 * @method PartnerAPITypeParsedCsr setJoISoCN(string $value) Sets the joISoCN element.
 * @method string getJoISoCN() Gets the joISoCN element or NULL.
 * @property string $joISoCN Gets the joISoCN element or NULL.
 *
 * @method PartnerAPITypeParsedCsr setJoILN(string $value) Sets the joILN element.
 * @method string|null getJoILN() Gets the joILN element or NULL.
 * @property string|null $joILN Gets the joILN element or NULL.
 *
 * @method PartnerAPITypeParsedCsr setJoISoPN(string $value) Sets the joISoPN element.
 * @method string|null getJoISoPN() Gets the joISoPN element or NULL.
 * @property string|null $joISoPN Gets the joISoPN element or NULL.
 *
 * @method PartnerAPITypeParsedCsr setBusinessCategory(string $value) Sets the businessCategory element.
 * @method string|null getBusinessCategory() Gets the businessCategory element or NULL.
 * @property string|null $businessCategory Gets the businessCategory element or NULL.
 *
 * @method PartnerAPITypeParsedCsr setLocality(string $value) Sets the locality element.
 * @method string|null getLocality() Gets the locality element or NULL.
 * @property string|null $locality Gets the locality element or NULL.
 *
 * @method PartnerAPITypeParsedCsr setOrganization(string $value) Sets the organization element.
 * @method string|null getOrganization() Gets the organization element or NULL.
 * @property string|null $organization Gets the organization element or NULL.
 *
 * @method PartnerAPITypeParsedCsr setOrganizationalUnit(string $value) Sets the organizationalUnit element.
 * @method string|null getOrganizationalUnit() Gets the organizationalUnit element or NULL.
 * @property string|null $organizationalUnit Gets the organizationalUnit element or NULL.
 *
 * @method PartnerAPITypeParsedCsr setPostalCode(string $value) Sets the postalCode element.
 * @method string|null getPostalCode() Gets the postalCode element or NULL.
 * @property string|null $postalCode Gets the postalCode element or NULL.
 *
 * @method PartnerAPITypeParsedCsr setSerialNumber(string $value) Sets the serialNumber element.
 * @method string|null getSerialNumber() Gets the serialNumber element or NULL.
 * @property string|null $serialNumber Gets the serialNumber element or NULL.
 *
 * @method PartnerAPITypeParsedCsr setStreetAddress(string $value) Sets the streetAddress element.
 * @method string|null getStreetAddress() Gets the streetAddress element or NULL.
 * @property string|null $streetAddress Gets the streetAddress element or NULL.
 *
 * @method PartnerAPITypeParsedCsr setState(string $value) Sets the state element.
 * @method string|null getState() Gets the state element or NULL.
 * @property string|null $state Gets the state element or NULL.
 *
 * @package types
 */
class PartnerAPITypeParsedCsr extends PartnerAPIType
{
    protected function initData()
    {
        $n = array(
            'commonName'         => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'country'            => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'email'              => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'joISoCN'            => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'joILN'              => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'joISoPN'            => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'businessCategory'   => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'locality'           => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'organization'       => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'organizationalUnit' => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'postalCode'         => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'serialNumber'       => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'streetAddress'             => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'state'              => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false)
        );
        return $n;
    }
}
