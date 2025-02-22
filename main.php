<?php 
    session_start();
    if(!isset($_SESSION['username'])) {
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="manifest" href="manifest.json">
    <script src="app.js"></script>
    <title>Push Notify</title>
</head>
<style>
    #formSend {
        display: none;
    }
</style>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-sm-12 col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-title">
                        <h4 class="text-center mt-3 mb-0">PHP PWA Webpush (per user)</h4>
                    </div>
                    <div class="card-body">
                        <h6 class="text-muted">Loged as, <?php echo $_SESSION['username']; ?></h6>
                        <div class="card">
                            <div class="card-body">
                                <button id="BtnSub" class="btn btn-primary w-100">Enable Notification</button>
                                <form action="" id="formSend">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="title" id="title" class="form-control" required>
                                        <label for="title">Title :</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="body" id="body" class="form-control" required>
                                        <label for="body">Message :</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="url" id="url" class="form-control" required>
                                        <label for="url">URL :</label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success w-100">Send Notification</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="logout.php" class="btn btn-danger w-100">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

