<?php
// edit dbInsert
function isstetData($title, $describe, $status, $productUnit)
{
    return (isset($title) && isset($describe) && isset($status) && isset($productUnit)) ? false : true;
}

function isNotNull($title, $describe, $status)
{
    return (!is_null($title) || !is_null($describe) || !is_null($status)) ? false : true;
}

function correctTitle($title)
{
    $result;
    $lenght = strlen($title);
    if ($lenght < 2 || $lenght > 20) {
        $result =  true;
    } elseif (!preg_match("/^[a-zA-ZżźćńółęąśŻŹĆĄŚĘŁÓŃ0-9 ]*$/", $title)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function correctDescribe($describe)
{
    $result;
    $lenght = strlen($describe);
    if ($lenght < 5 || $lenght > 100) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}


function correctStatus($status)
{
    $result;
    switch ($status) {
        case 'niedostepny': //old version
        case 'dostepny': //old version
        case 'widoczny':
        case 'ukryty':
            $result = false;
            break;
        default:
            $result = true;
    }
    return $result;
}

function removeProduct($deleteProduct)
{
    $result;
    switch ($deleteProduct) {
        case 1:
        case 2:
            $result = false;
            break;
        default:
            $result = true;
    }
    return $result;
}
