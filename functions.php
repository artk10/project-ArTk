<?php

class Product {
    public $name;
    public $price;
    public $weight;
    public $typeProduct;
    public $image;
    public $country;
    public $city;

    public function __construct($name, $price, $weight, $typeProduct, $image, $country, $city) {
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
        $this->typeProduct = $typeProduct;
        $this->image = $image;
        $this->country = $country;
        $this->city = $city;
    }

    public function __toString() {
        return $this->name;
    }

    public function getLocation(): string {
        return $this->country . ', ' . $this->city;
    }
}


function getDataFromFile($file) {
    $array = [];
    $fileName = file($file);
    foreach ($fileName as $line) {
        $row = explode(";", $line);
        $product = new Product($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6]);
        $array[] = $product;
    }
    return $array;
}

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
