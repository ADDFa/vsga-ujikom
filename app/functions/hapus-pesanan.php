<?php

require_once(__DIR__ . "/../core.php");

$id = $_GET["id"];

if ($id) {
    $result = query("DELETE FROM orders WHERE id = {$id}");
    $status = $result ? 'success' : 'failed';
    header("Location: /orders.php?status={$status}");
}
