<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <title>Login</title>
</head>
<body>
    <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card my-4">
                <div class="card-header bg-warning text-center"><strong>login Sebagai Admin</strong></div>
                    <div class="card-body">
                        <form action="<?= base_url('prosesLogin') ?>" method="POST">

                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>

                            <button class="btn btn-success btn-block">login</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

    <script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
</body>
</html>