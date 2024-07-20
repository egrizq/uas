<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar border">
        <div class="container-fluid">
            <div clas="row">
                <img class="navbar-brand" src="/undira.png" height="45">
                <a class="navbar-brand text-primary" href="<?= base_url('/'); ?>" role="button">Dashboard</a>
                <a class="navbar-brand text-primary" href="/tampilkan_data">Lihat Data</a>
            </div>

            <div>
                <span class="navbar-brand">Welcome | <?= session()->get('username'); ?></span>
                <a class="navbar-brand text-primary" href="<?= base_url('/logout'); ?>" role="button">Logout</a>
            </div>
        </div>
    </nav>

    <?php foreach ($allData as $data): ?>
    <div class="container-fluid pb-5">

        <div class="row mx-2 pt-3 justify-content-between">
            <div class="col-2">
                <div class="text-center">
                    <img src="<?= base_url('uploads/' . $data['foto']) ?>" alt="<?= $data['foto'] ?>" height="200">
                    <h5 class="pt-3">Selamat Datang,
                        "<?php echo $data['nama_tengah'] . ' ' . $data['nama_belakang']; ?>"
                    </h5>
                </div>
            </div>

            <div class="col-2 text-end">
                <div class="text-center">
                    <canvas id="kota" width="50" height="50"></canvas>
                    <h5 class="pt-3">Pendaftaran per Kota</h5>
                </div>
            </div>
        </div>

        <div class="text-end py-3 mx-2">
            <a href="/edit" class="btn btn-warning">Edit</a>
        </div>


        <div class="row border py-3 mx-2">

            <div class="col-4" data-mdb-input-init class="form-outline mb-4">
                <label class="form-label fw-semibold" for="nama_depan">Nama</label>
                <input type="text" name="nama_depan" class="form-control form-control-md text-center"
                    placeholder="<?php echo $data['nama_depan'] . ' ' . $data['nama_tengah'] . ' ' . $data['nama_belakang']; ?>"
                    disabled>
            </div>

            <div class="col-4" data-mdb-input-init class="form-outline mb-4">
                <label class="form-label fw-semibold" for="nama_depan">Tanggal Lahir</label>
                <input type="text" name="nama_depan" class="form-control form-control-md text-center"
                    value="<?php echo $data['tanggal_lahir'] ?>" disabled>
            </div>

            <div class="col-4" data-mdb-input-init class="form-outline mb-4">
                <label class="form-label fw-semibold" for="nama_depan">Tempat Lahir</label>
                <input type="text" name="nama_depan" class="form-control form-control-md text-center"
                    placeholder="<?php echo $data['tempat_lahir'] ?>" disabled>
            </div>

            <div class="col-4" data-mdb-input-init class="form-outline mb-4">
                <label class="form-label fw-semibold" for="nama_depan">Jenis Kelamin</label>
                <input type="text" name="nama_depan" class="form-control form-control-md text-center"
                    placeholder="<?php echo $data['jenis_kelamin'] ?>" disabled>
            </div>

            <div class="col-4" data-mdb-input-init class="form-outline mb-4">
                <label class="form-label fw-semibold" for="nama_depan">Nomor Handphone</label>
                <input type="text" name="nama_depan" class="form-control form-control-md text-center"
                    placeholder="<?php echo $data['nomor_handphone'] ?>" disabled>
            </div>

            <div class="col-4" data-mdb-input-init class="form-outline mb-4">
                <label class="form-label fw-semibold" for="nama_depan">Email</label>
                <input type="text" name="nama_depan" class="form-control form-control-md text-center"
                    placeholder="<?php echo $data['email'] ?>" disabled>
            </div>

            <div class="col-12" data-mdb-input-init class="form-outline mb-4">
                <label class="form-label fw-semibold" for="nama_depan">Alamat</label>
                <input type="text" name="nama_depan" class="form-control form-control-md text-center"
                    placeholder="<?php echo $data['alamat'] ?>" disabled>
            </div>

        </div>
    </div>
    </div>

    <?php endforeach; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
    const ctx = document.getElementById('kota');
    const modelKota = <?= $modelKota ?>;
    new Chart(ctx, {
        type: 'doughnut',
        data: {
            datasets: [{
                label: modelKota.labels,
                data: modelKota.data
            }, ],
        },
        options: {}
    })
    </script>

</body>

</html>