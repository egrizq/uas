<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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

    <div class="container-fluid">


        <div class="row py-3 justify-content-center">
            <div class="col-10">

                <div class="row justify-content-between py-3">

                    <div class="col-2">
                        <input type="text" class="form-control form-control-md" placeholder="Search" />
                    </div>

                    <div class="col-2">
                        <form class="text-end" action="<?php echo site_url('/excel'); ?>" method="post">
                            <button class="btn btn-success" type="submit">Export Excel</button>
                        </form>
                    </div>
                </div>

                <table class="table border">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Negara</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Kode Pos</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Nomor HP</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Email</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allData as $data): ?>
                        <tr>
                            <td><?php echo $data['nama_depan'] . ' ' . $data['nama_tengah'] . ' ' . $data['nama_belakang']; ?>
                            </td>
                            <td><?= $data['negara'] ?></td>
                            <td><?= $data['kota'] ?></td>
                            <td><?= $data['kode_pos'] ?></td>
                            <td><?= $data['jenis_kelamin'] ?></td>
                            <td><?= $data['nomor_handphone'] ?></td>
                            <td><?= $data['tanggal_lahir'] ?></td>
                            <td><?= $data['email'] ?></td>
                            <td>
                                <form action="<?php echo site_url('/delete'); ?>" method="post">
                                    <input value="<?php echo $data['id_pendaftaran'] ?>" type="hidden"
                                        name="id_pendaftaran" />

                                    <button type="submit" class="btn btn-danger">
                                        <img src="/trash.svg" width="25" />
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>