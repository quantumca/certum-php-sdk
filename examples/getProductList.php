<?php

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

use Certum\Sdk\PartnerAPIService;

/*
 * Creating a service object. See start.php file.
 */

$service = new PartnerAPIService('userName', 'password');

/*
 * Generating the operation getProductList object.
 */

$op = $service->operationGetProductList();

/*
 * Optionally, requesting hash algorithms.
 */

$op->setHashAlgorithm(true);

/*
 * Calling the operation.
 */

if ($op->call())
    $products = $op->getProducts();
else
    die("error");

/*
 * Accessing the data returned in the response.
 */

foreach ($products as $product) {
    print $product->code;
    print $product->type;
    print $product->validityPeriod;
    if ($product->supportedHashAlgorithms)
        foreach ($product->supportedHashAlgorithms as $hashAlgorithm) {
            print $hashAlgorithm;
        }
}
