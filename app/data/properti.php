<?php

$properti = query("SELECT * FROM properties");
$properti = getResult($properti);

function findProperty($id)
{
    $result = query("SELECT * FROM properties WHERE id = {$id}");
    $result = getResult($result)[0];
    return $result;
}
