<?php

function getHeader($header, $maxName) {
    return sprintf('| %-' . $maxName . 's | %-5s | %6s |', $header[0], $header[1], $header[2]) . "\n";
}

function getRow($maxName) {
    return '|' . str_repeat('-', 2 + $maxName) . '|' . str_repeat('-', 7) . '|' . str_repeat('-', 8) . '|' . "\n";
}

function getColumn($column, $maxName) {
    return sprintf('| %-' . $maxName .'s | %-7s | %6d |', $column[0], '€' . $column[1], $column[2]);
}

function getData($data, $maxName) {
    $string = '';
    foreach ($data as $row) {
        $string .= getColumn($row, $maxName) . "\n";
    }
    return $string;
}

function getMaxName($data, $header) {
    $maxLength = strlen($header[0]);
    foreach ($data as $row) {
        if (strlen($row[0]) > $maxLength) {
            $maxLength = strlen($row[0]);
        }
    }
    return $maxLength;
}

function getSumPrice($data) {
    $sum = 0;
    foreach ($data as $value) {
        $sum += $value[1];
    }
    return $sum;
}

function getSumWeight($data) {
    $weight = 0;
    foreach ($data as $value) {
        $weight += $value[2];
    }
    return $weight;
}

function getTotalPrice($totalPrice, $maxName) {
    return sprintf('|Total price: €%d %' . $maxName . 's|',$totalPrice, '') . "\n";
}

function getFiles($data) {
    $lines = [];
    foreach ($data as $row) {
        $lines[] = implode(";", $row);
    }
    return $lines;
}

function getDataFromFile($file) {
    $array = [];
    $fileName = file($file);
    foreach ($fileName as $line) {
        $row = explode(";", $line);
        $array[] = [$row[0], $row[1], $row[2], $row[3], $row[4], $row[5]];
    }
    return $array;
}

function search($data, $search) {
    $newData = [];
    foreach ($data as $item) {
        if (str_contains(strtoupper($item[0]), strtoupper($search))) {
            $newData[] = $item;
        }
    }
    return $newData;
}

function getTotalProduct($data) {
    return count($data);
}
