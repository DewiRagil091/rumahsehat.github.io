<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <!-- Halaman Login -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h1>Halaman Login</h1>
                </div>
                <div class="card-body">
                    <form action="aksi_login.php" method="post">
                        <div class="mb-3">
                            <label  class="form-label">Username :</label>
                            <input type="email" name="username" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password :</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit" value="Login" name="login" >Login</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>

            </div>
        </div>
    </div>
</body>
</html>