<?php
namespace Certum\Sdk\Types;
/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

/*
<xs:simpleType name="orderVerificationType">
        <xs:restriction base="xs:string">
                <xs:enumeration value="EMAIL"/>
                <xs:enumeration value="INTERNAL"/>
                <xs:enumeration value="DOMAIN"/>
                <xs:enumeration value="PRODUCT"/>
                <xs:enumeration value="EXTENDED_VALIDATION"/>
                <xs:enumeration value="ORGANIZATION"/>
                <xs:enumeration value="APPLICANT"/>
                <xs:enumeration value="AUTHORIZATION"/>
        </xs:restriction>
</xs:simpleType>
*/

/**
 * This class represents the orderVerificationTypeEnum WSDL type.
 *
 * This is a set of constant values representing enumeration type from WSDL file.
 *
 * @package types
 */
class PartnerAPITypeOrderVerificationTypeEnum {

    const EMAIL = "EMAIL";
    const INTERNAL = "INTERNAL";
    const DOMAIN = "DOMAIN";
    const PRODUCT = "PRODUCT";
    const EXTENDED_VALIDATION = "EXTENDED_VALIDATION";
    const ORGANIZATION = "ORGANIZATION";
    const APPLICANT = "APPLICANT";
    const AUTHORIZATION = "AUTHORIZATION";

    private function __construct() {
    }


}
