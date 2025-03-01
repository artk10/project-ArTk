<?php

class Product {
    public $name;
    public $price;
    public $weight;
    public $typeProduct;
    public $image;

}

$product = new Product();
$product->name = '';
$product->price = '';
$product->weight = '';
$product->typeProduct = '';
$product->image = '';

function getMaxName($data, $header) {
    $maxLength = strlen($header[0]);
    foreach ($data as $product) {
        if (strlen($product->name) > $maxLength) {
            $maxLength = strlen($product->name);
        }
    }
    return $maxLength;
}

function getSumPrice($data) {
    $sum = 0;
    foreach ($data as $product) {
        $sum += $product->price;
    }
    return $sum;
}

function getSumWeight($data) {
    $weight = 0;
    foreach ($data as $product) {
        $weight += $product->weight;
    }
    return $weight;
}

function search($data, $search) {
    $newData = [];
    foreach ($data as $product) {
        if (str_contains(strtoupper($product->name), strtoupper($search))) {
            $newData[] = $product;
        }
    }
    return $newData;
}

function getTotalProduct($data) {
    return count($data);
}


function getDataFromFile($file) {
    $array = [];
    $fileName = file($file);
    foreach ($fileName as $line) {
        $row = explode(";", $line);
        $product = new Product();
        $product->name = $row[0];
        $product->price = $row[1];
        $product->weight = $row[2];
        $product->typeProduct = $row[3];
        $product->image = $row[4];
        $array[] = $product;
    }
    return $array;
}