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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>