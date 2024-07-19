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
    <div class="container-fluid">
        <div class="row justify-content-center py-5">

            <div class="col-8 border py-3">
                <div class="text-center">
                    <h3>Form Registrasi</h3>
                    <h5 class="py-3">Student Information</h5>
                </div>

                <form class="row" method="POST" action="<?= base_url('/register');?>" enctype="multipart/form-data">
                    <div class="col-4" data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label fw-semibold" for="nama_depan">Nama Depan</label>
                        <input type="text" name="nama_depan" class="form-control form-control-md"
                            placeholder="Nama Depan" required />
                    </div>

                    <div class="col-4" data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label fw-semibold" for="nama_tengah">Nama Tengah</label>
                        <input type="text" name="nama_tengah" class="form-control form-control-md"
                            placeholder="Nama Tengah" required />
                    </div>

                    <div class="col-4" data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label fw-semibold" for="nama_belakang">Nama Belakang</label>
                        <input type="text" name="nama_belakang" class="form-control form-control-md"
                            placeholder="Nama Belakang" required />
                    </div>

                    <div class="col-6 pt-2">
                        <label class="form-label fw-semibold" for="tanggal_lahir">Tanggal Lahir</label><br>
                        <input class="form-control form-control-md" type="date" name="tanggal_lahir" required />
                    </div>

                    <div class="col-6 pt-2">
                        <label class="form-label fw-semibold" for="nama_belakang">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control form-control-md"
                            placeholder="Tempat Lahir" required />
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
                        <input type="number" name="nomor_handphone" class="form-control form-control-md"
                            placeholder="Nomor Handphone" required />
                    </div>

                    <div class="col pt-2">
                        <label class="form-label fw-semibold" for="email">Email</label>
                        <input type="text" name="email" class="form-control form-control-md" placeholder="Email"
                            required />
                    </div>

                    <h5 class="text-center pt-3">Address</h5>

                    <div class="col-12">
                        <label class="form-label fw-semibold" for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control form-control-md" placeholder="Alamat"
                            required />
                    </div>

                    <div class="col-6 pt-2">
                        <label class="form-label fw-semibold" for="Kota">Kota</label>
                        <input type="text" name="kota" class="form-control form-control-md" placeholder="Kota"
                            required />
                    </div>

                    <div class="col-6 pt-2">
                        <label class="form-label fw-semibold" for="Provinsi">Provinsi</label>
                        <input type="text" name="provinsi" class="form-control form-control-md" placeholder="Provinsi"
                            required />
                    </div>


                    <div class="col-6 pt-2">
                        <label class="form-label fw-semibold" for="nama_belakang">Negara</label>
                        <input type="text" name="negara" class="form-control form-control-md" placeholder="Negara"
                            required />
                    </div>

                    <div class="col-6 pt-2">
                        <label class="form-label fw-semibold" for="nama_belakang">Kode Pos</label>
                        <input type="number" name="kode_pos" class="form-control form-control-md" placeholder="Kode Pos"
                            required />
                    </div>

                    <h5 class="text-center pt-3">Akun</h5>

                    <div class="col-6 pt-2">
                        <label class="form-label fw-semibold" for="nama_belakang">Username</label>
                        <input type="text" name="username" class="form-control form-control-md" placeholder="Username"
                            required />
                    </div>

                    <div class="col-6 pt-2">
                        <label class="form-label fw-semibold" for="nama_belakang">Password</label>
                        <input type="password" name="password" class="form-control form-control-md"
                            placeholder="Password" required />
                    </div>

                    <div class="col-12 pt-2">
                        <label class="form-label fw-semibold" for="foto">foto</label>
                        <input type="file" name="foto" class="form-control form-control-md" required />
                    </div>

                    <div class="col-12 pt-2">
                        <div class="mb-3">
                            <label class="form-label fw-semibold" for="foto">Komentar</label>
                            <textarea name="komentar" class="form-control" id="exampleFormControlTextarea1" rows="3"
                                required></textarea>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Register</button>
                    </div>

                </form>

            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>