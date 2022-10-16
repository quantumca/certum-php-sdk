<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

/*
<xs:simpleType name="businessCategoryEnum">
 <xs:restriction base="xs:string">
        <xs:enumeration value="Private Organization"/>
        <xs:enumeration value="Government Entity"/>
        <xs:enumeration value="Business Entity"/>
        <xs:enumeration value="Non-Commercial Entity"/>
 </xs:restriction>
</xs:simpleType>
*/

/**
 * This class represents the businessCategoryEnum WSDL type.
 *
 * This is a set of constant values representing enumeration type from WSDL file.
 *
 * @package types
 */
class PartnerAPITypeBusinessCategoryEnum
{
    const PRIVATE_ORGANIZATION = "Private Organization";
    const GOVERNMENT_ENTITY = "Government Entity";
    const BUSINESS_ENTITY = "Business Entity";
    const NON_COMMERCIAL_ENTITY = "Non-Commercial Entity";

    private function __construct()
    {
    }
}
