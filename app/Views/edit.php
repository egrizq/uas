<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar border">
        <div class="container-fluid">
            <div clas="row">
                <img class="navbar-brand" src="/undira.png" height="45">
                <a class="navbar-brand text-primary" href="<?= base_url('/'); ?>" role="button">Dashboard</a>
                <a class="navbar-brand text-primary" href="<?= base_url('/'); ?>" role="button">Lihat Data</a>
            </div>

            <div>
                <span class="navbar-brand">Welcome | <?= session()->get('username'); ?></span>
                <a class="navbar-brand text-primary" href="<?= base_url('/logout'); ?>" role="button">Logout</a>
            </div>
        </div>
    </nav>

    <?php foreach ($allData as $data): ?>

    <div class="container-fluid">
        <div class="row py-5 justify-content-center">
            <div class="col-6 border py-3">
                <div class="text-center">
                    <h3>Edit Profile</h3>
                </div>

                <form class="row" method="POST" action="<?= base_url('/edit');?>" enctype="multipart/form-data">
                    <input value="<?php echo $data['id_pendaftaran'] ?>" type="hidden" name="id_pendaftaran" />

                    <div class="col-4" data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label fw-semibold" for="nama_depan">Nama Depan</label>
                        <input type="text" name="nama_depan" class="form-control form-control-md"
                            placeholder="Nama Depan" value="<?php echo $data['nama_depan'] ?>" required />
                    </div>

                    <div class="col-4" data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label fw-semibold" for="nama_tengah">Nama Tengah</label>
                        <input type="text" name="nama_tengah" class="form-control form-control-md"
                            placeholder="Nama Tengah" value="<?php echo $data['nama_tengah'] ?>" required />
                    </div>

                    <div class="col-4" data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label fw-semibold" for="nama_belakang">Nama Belakang</label>
                        <input type="text" name="nama_belakang" class="form-control form-control-md"
                            placeholder="Nama Belakang" value="<?php echo $data['nama_belakang'] ?>" required />
                    </div>

                    <div class="col-6 pt-2">
                        <label class="form-label fw-semibold" for="nama_belakang">Negara</label>
                        <input type="text" name="negara" value="<?php echo $data['negara'] ?>"
                            class="form-control form-control-md" placeholder="Negara" required />
                    </div>

                    <div class="col-6 pt-2">
                        <label class="form-label fw-semibold" for="Kota">Kota</label>
                        <input type="text" name="kota" value="<?php echo $data['kota'] ?>"
                            class="form-control form-control-md" placeholder="Kota" required />
                    </div>

                    <div class="col-6 pt-2">
                        <label class="form-label fw-semibold" for="nama_belakang">Kode Pos</label>
                        <input type="number" name="kode_pos" value="<?php echo $data['kode_pos'] ?>"
                            class="form-control form-control-md" placeholder="Kode Pos" required />
                    </div>

                    <div class="col-6 pt-2">
                        <label class="form-label fw-semibold" for="jenis_kelamin">Jenis Kelamin</label><br>
                        <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="col-6 pt-2">
                        <label class="form-label fw-semibold" for="nomor_handphone">Nomor Handphone</label>
                        <input type="number" name="nomor_handphone" value="<?php echo $data['nomor_handphone'] ?>"
                            class="form-control form-control-md" placeholder="Nomor Handphone" required />
                    </div>

                    <div class="col-6 pt-2">
                        <label class="form-label fw-semibold" for="tanggal_lahir">Tanggal Lahir</label><br>
                        <input class="form-control form-control-md" value="<?php echo $data['tanggal_lahir'] ?>"
                            type="date" name="tanggal_lahir" required />
                    </div>

                    <div class="col pt-2">
                        <label class="form-label fw-semibold" for="email">Email</label>
                        <input type="text" name="email" value="<?php echo $data['email'] ?>"
                            class="form-control form-control-md" placeholder="Email" required />
                    </div>

                    <div class="text-center pt-3">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

        <?php endforeach; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>