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

            <div class="col-3 border py-3">
                <div class="text-center">
                    <h3>Login</h3>
                </div>

                <form method="POST" action="<?= base_url('/login');?>">
                    <div class="" data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label fw-semibold" for="username">Username</label>
                        <input type="text" name="username" class="form-control form-control-md" placeholder="Username"
                            required />
                    </div>

                    <div class="pt-3" data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label fw-semibold" for="nama_depan">Password</label>
                        <input type="password" name="password" class="form-control form-control-md"
                            placeholder="Password" required />
                    </div>

                    <div class="text-center pt-4">
                        <button class="btn btn-primary" type="submit">Login</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="/register"
                                class="link-danger">Register</a></p>
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