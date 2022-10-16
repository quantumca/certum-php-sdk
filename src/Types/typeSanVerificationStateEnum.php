<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

/*
<xs:simpleType name="sanVerificationStateEnum">
    <xs:restriction base="xs:string">
        <xs:enumeration value="REQUIRED"/>
        <xs:enumeration value="FAILED"/>
        <xs:enumeration value="VERIFIED"/>
    </xs:restriction>
</xs:simpleType>
*/

/**
 * This class represents the sanVerificationStateEnum WSDL type.
 *
 * This is a set of constant values representing enumeration type from WSDL file.
 *
 * @package types
 */
class PartnerAPITypeSanVerificationStateEnum
{
    const REQUIRED = "REQUIRED";
    const FAILED = "FAILED";
    const VERIFIED = "VERIFIED";

    private function __construct()
    {
    }
}
