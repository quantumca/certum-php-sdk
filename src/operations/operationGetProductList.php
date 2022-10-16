<?php

namespace Certum\Sdk\Operations;

/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


use Certum\Sdk\Messages\PartnerAPIMessageGetProductList;
use Certum\Sdk\Messages\PartnerAPIMessageGetProductListResponse;

/*
<operation name="getProductList" parameterOrder="getProductList">
	<input message="tns:PartnerServicePortType_getProductList">
	</input>
	<output message="tns:PartnerServicePortType_getProductListResponse">
	</output>
</operation>
*/

/**
 * This class represents the getProductList WSDL operation.
 *
 * It is based on the PartnerAPIOperation class and derives some properties and methods from that class.
 *
 * @method PartnerAPIMessageGetProductListResponse getResponseMessage() A complete response from a service
 * 
 * @package operations
 */
class PartnerAPIOperationGetProductList extends PartnerAPIOperation
{

    /**
     * @var PartnerAPIMessageGetProductList
     */
    protected $_input = NULL;

    /**
     * @var PartnerAPIMessageGetProductListResponse
     */
    protected $_output = NULL;

    /**
     * @var string
     */
    protected $_operation = 'getProductList';

    /**
     * The constructor.
     *
     * It initializes input and output data.
     */
    public function __construct()
    {
        $this->_input  = new PartnerAPIMessageGetProductList();
        $this->_output = new PartnerAPIMessageGetProductListResponse();
    }

    /**
     * Sets whether or not returned products should contain information about available hash algorithms.
     *
     * @param boolean $hashAlgorithm
     * @return PartnerAPIOperationGetProductList
     */
    public function setHashAlgorithm($hashAlgorithm)
    {
        $this->_input->getProductList->setHashAlgorithm($hashAlgorithm);
        return $this;
    }

    /**
     * Returns products contained in a response.
     *
     * This method always returns an array.
     * If there is no product in the response an empty array is returned.
     * Otherwise, an array with one or more products is returned.
     * Keys in the array are numbers meaning the product code
     * and values are objects of type PartnerAPITypeProduct.
     * The following properties are set for each product: code, type and
     * validityPeriod.
     *
     * @return PartnerAPITypeProduct[]
     */
    public function getProducts()
    {
        $productList = array();
        $products = $this->_output->getProductListResponse->products;
        if (is_null($products))
            return $productList;
        $product = $products->product;
        if (is_array($product))
            foreach ($product as $p)
                $productList[$p->code] = $p;
        else
            $productList[$product->code] = $product;
        return $productList;
    }
}
