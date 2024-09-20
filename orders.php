<?php require_once(__DIR__ . "/layouts/header.php") ?>
<?php require_once(__DIR__ . "/app/data/orders.php") ?>

<div class="container mt-4">
    <h4 class="text-center my-4">Riwayat Pesanan Rental Properti</h4>
    <hr />

    <table class="table" id="table-orders">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Properti</th>
                <th scope="col">No HP</th>
                <th scope="col">Durasi Sewa</th>
                <th scope="col">Total</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $i => $order) : ?>
                <tr>
                    <th scope="row"><?= ++$i ?></th>
                    <td><?= $order["nama"] ?></td>
                    <td><?= $order["nama_properti"] ?></td>
                    <td><?= $order["no_hp"] ?></td>
                    <td><?= $order["durasi_sewa"] ?></td>
                    <td><?= "Rp " . number_format($order["total"], 2, ",", ".") ?></td>
                    <td class="text-center">
                        <a href="/pages/edit-orders.php?id=<?= $order["id"] ?>" class="btn btn-warning">Edit</a>
                        <button class="btn btn-danger hapus-pesanan" data-id="<?= $order["id"] ?>">Hapus</button>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php require_once(__DIR__ . "/layouts/footer.php") ?>