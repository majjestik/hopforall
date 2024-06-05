<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Inscription réussie - HOP FOR ALL</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 montserrat-sm text-center  my-5 p-5">
                <h5 class="text-success">Modification réussie ! </h5>
                <p>
                    Vous allez être redirigé vers la page de connection dans quelques instants...
                </p>
                <?php header('Refresh: 10; connect.php') ?>
            </div>
        </div>
    </div>




    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
    
</body>
</html>