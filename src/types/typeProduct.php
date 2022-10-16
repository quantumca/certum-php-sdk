<?php
namespace Certum\Sdk\Types;
/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="product">
	<xs:sequence>
		<xs:element minOccurs="0" name="code" type="xs:long"/>
		<xs:element minOccurs="0" name="type" type="xs:string"/>
		<xs:element minOccurs="0" name="validityPeriod" type="xs:int"/>
		<xs:element minOccurs="0" name="certificateNotificationEnabled" type="xs:boolean"/>
		<xs:sequence>
			<xs:element minOccurs="0" name="supportedHashAlgorithms">
				<xs:complexType>
					<xs:sequence>
						<xs:element maxOccurs="unbounded" name="hashAlgorithm" type="tns:hashAlgorithmEnum"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
		</xs:sequence>
	</xs:sequence>
</xs:complexType>
*/

/**
 * This class represents the product WSDL type.
 *
 * It is based on the PartnerAPIType class and derives properties and methods from that class.
 * 
 * @method PartnerAPITypeProduct setSupportedHashAlgorithms(PartnerAPITypeProduct_SupportedHashAlgorithms $value) Sets the supportedHashAlgorithms element.
 * @method PartnerAPITypeProduct_SupportedHashAlgorithms getSupportedHashAlgorithms() Gets the supportedHashAlgorithms element or NULL.
 * @property PartnerAPITypeProduct_SupportedHashAlgorithms $supportedHashAlgorithms Gets the supportedHashAlgorithms element or NULL.
 * 
 * @method PartnerAPITypeProduct setCode(long $value) Sets the code element.
 * @method long getCode() Gets the code element or NULL.
 * @property long $code Gets the code element or NULL.
 * 
 * @method PartnerAPITypeProduct setType(string $value) Sets the type element.
 * @method string getType() Gets the type element or NULL.
 * @property string $type Gets the type element or NULL.
 * 
 * @method PartnerAPITypeProduct setValidityPeriod(int $value) Sets the validityPeriod element.
 * @method int getValidityPeriod() Gets the validityPeriod element or NULL.
 * @property int $validityPeriod Gets the validityPeriod element or NULL.
 *
 * @method PartnerAPITypeProduct setCertificateNotificationEnabled(boolean $value) Sets the certificateNotificationEnabled element.
 * @method boolean getCertificateNotificationEnabled() Gets the certificateNotificationEnabled element or NULL.
 * @property boolean $certificateNotificationEnabled Gets the certificateNotificationEnabled element or NULL.
 *
 * @package types
 */
class PartnerAPITypeProduct extends PartnerAPIType {
    
    protected function initData() {
        $n = array(
            'supportedHashAlgorithms'         => array('min' => 0, 'max' => 1, 'value' => NULL, 'type' => 'PartnerAPITypeProduct_SupportedHashAlgorithms', 'nillable' => FALSE),
            'code'                            => array('min' => 0, 'max' => 1, 'value' => NULL, 'type' => 'long', 'nillable' => FALSE),
            'type'                            => array('min' => 0, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE),
            'validityPeriod'                  => array('min' => 0, 'max' => 1, 'value' => NULL, 'type' => 'int', 'nillable' => FALSE),
            'certificateNotificationEnabled'  => array('min' => 0, 'max' => 1, 'value' => NULL, 'type' => 'boolean', 'nillable' => FALSE),
        );
        return $n;
    }


}
