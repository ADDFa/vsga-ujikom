<?php require_once(__DIR__ . "/../layouts/header.php") ?>
<?php require_once(__DIR__ . "/../app/data/properti.php") ?>
<?php $properti = findProperty($_GET["id"]) ?>

<div class="text-center my-3">
    <h1 class="text-center">Sewa Pesanan</h1>
    <img src="/assets/img/logo.png" alt="peoperty rental" width="70">
</div>

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <form action="/app/functions/tambah-pesanan.php" method="POST">
                <div class="row row-cols-1 row-cols-lg-2">
                    <div class="mb-3 col">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3 col">
                        <label for="no_hp" class="form-label">No. HP</label>
                        <input type="number" class="form-control" id="no_hp" name="no_hp" required>
                    </div>
                    <div class="mb-3 col">
                        <label for="durasi_sewa" class="form-label">Durasi Sewa (Bulan)</label>
                        <input type="number" class="form-control" id="durasi_sewa" name="durasi_sewa" required>
                    </div>
                    <div class="mb-3 col">
                        <label for="jenis_properti" class="form-label">Jenis Properti</label>
                        <select class="form-select" name="property_id" id="jenis_properti">
                            <?php foreach ($properti as $p) : ?>
                                <option value="<?= $p["id"] ?>" data-harga="<?= $p["harga_sewa_per_bulan"] ?>">
                                    <?= $p["nama_properti"] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-12 mt-4">
                        <h5 class="fw-bold">Total Harga: <span id="total">0</span></h5>
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-1 my-4">
                    <button class="btn btn-primary" type="button" id="hitung">Hitung</button>
                    <button class="btn btn-success" type="submit">Pesan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once(__DIR__ . "/layouts/footer.php") ?>