<?php

$orders = query("SELECT orders.id, orders.property_id, orders.nama, orders.nama, orders.no_hp, orders.durasi_sewa, orders.total, 
properties.nama_properti
 FROM orders LEFT JOIN properties ON property_id = properties.id");
$orders = getResult($orders);
