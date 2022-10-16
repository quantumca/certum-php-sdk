<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

/*
<xs:simpleType name="sanVerificationSystemMethodEnum">
    <xs:restriction base="xs:string">
        <xs:enumeration value="TOP_SITES"/>
        <xs:enumeration value="PHISHTANK"/>
        <xs:enumeration value="CAA"/>
        <xs:enumeration value="GOOGLE_SAFE_BROWSING"/>
        <xs:enumeration value="REVOKED_CERTIFICATE"/>
    </xs:restriction>
</xs:simpleType>
*/

/**
 * This class represents the sanVerificationSystemMethodEnum WSDL type.
 *
 * This is a set of constant values representing enumeration type from WSDL file.
 *
 * @package types
 */
class PartnerAPITypeSanVerificationSystemMethodEnum
{
    const TOP_SITES = "TOP_SITES";
    const PHISHTANK = "PHISHTANK";
    const CAA = "CAA";
    const GOOGLE_SAFE_BROWSING = "GOOGLE_SAFE_BROWSING";
    const REVOKED_CERTIFICATE = "REVOKED_CERTIFICATE";

    private function __construct()
    {
    }
}
