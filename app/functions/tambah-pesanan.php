<?php

require_once(__DIR__ . "/../core.php");

if ($_POST) {
    $nama = $_POST["nama"];
    $no_hp = $_POST["no_hp"];
    $durasi_sewa = $_POST["durasi_sewa"];
    $property_id = $_POST["property_id"];

    $property = query("SELECT * FROM properties WHERE id = '{$property_id}'");
    $property = getResult($property)[0];
    $total = (int) $durasi_sewa * (int) $property["harga_sewa_per_bulan"];

    if ($total >= 10000000) {
        $diskon = 5 / 100; // 5%
        $potongan = $diskon * $total;
        $total -= $potongan;
    }

    $result = query("INSERT INTO orders (nama, no_hp, durasi_sewa, property_id, total) VALUES ('{$nama}', '{$no_hp}', '{$durasi_sewa}', '{$property_id}', '{$total}')");
    $status = $result ? 'success' : 'gagal';

    header("Location: /?status={$status}");
}
