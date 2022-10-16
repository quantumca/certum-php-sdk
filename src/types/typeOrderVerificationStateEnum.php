<?php
namespace Certum\Sdk\Types;
/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

/*
<xs:simpleType name="orderVerificationState">
        <xs:restriction base="xs:string">
                <xs:enumeration value="NOT_REQUIRED"/>
                <xs:enumeration value="REQUIRED"/>
                <xs:enumeration value="FAILED"/>
                <xs:enumeration value="VERIFIED"/>
        </xs:restriction>
</xs:simpleType>
*/

/**
 * This class represents the orderVerificationStateEnum WSDL type.
 *
 * This is a set of constant values representing enumeration type from WSDL file.
 *
 * @package types
 */
class PartnerAPITypeOrderVerificationStateEnum {

    const NOT_REQUIRED = "NOT_REQUIRED";
    const REQUIRED = "REQUIRED";
    const FAILED = "FAILED";
    const VERIFIED = "VERIFIED";

    private function __construct() {
    }


}
