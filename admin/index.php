<?php
require('../config/commande.php');

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>HamzaSHOP - ADD Product</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="config/assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../config/css/styles.css" rel="stylesheet" />

        <!-- Font special for pages-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

        <!-- Main CSS-->
        <link href="css/main.css" rel="stylesheet" media="all">

    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!"><b>HamzaSHOP</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link " aria-current="page" href="../index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" href="admin/index.php">ADD Product</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">DELETE Product</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">ADD Product</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row">
                            <div class="name">Titre</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="titre" required placeholder="Titre de Produit">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Image Adresse</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="ads" placeholder="Adresse" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Prix</div>
                            <div class="value">
                                <input class="input--style-6" type="number" name="prix" placeholder="Prix" required>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input class="btn btn--radius-2 btn--blue-2" name="ajoute" type="submit" value="ADD Product">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- Footer-->
<footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

    </body>
</html>


<?php
if(isset($_POST['ajoute'])){
    if(isset($_POST['prix']) and isset($_POST['titre']) and isset($_POST['ads'])){
        $image = htmlspecialchars(strip_tags($_POST['ads']));
        $titre = htmlspecialchars(strip_tags($_POST['titre']));
        $prix = htmlspecialchars(strip_tags($_POST['prix']));
        $desc = "desc";
try {
    ajouter($image,$titre,$prix,$desc);
} catch (\Throwable $th) {
    $th->getMessage();
}
    }
}
?>