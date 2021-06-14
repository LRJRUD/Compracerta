<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo $pageTitle ?></title>

    <!-- Favicon -->
    <link rel="icon" href="img/logo-nave2.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,400;1,500;1,700&display=swap">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <link rel="stylesheet" href="lib/slick/slick.css">
    <link rel="stylesheet" href="lib/slick/slick-theme.css">

    <!-- Personal Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>

<!-- Bottom Bar Start -->
<div class="bottom-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="logo">
                    <a href="Home.php">
                        <img src="img/logo-marca.png" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="search">
                    <input type="text" placeholder="Pesquisar...">
                    <button><i class="fa fa-search"></i></button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="user">
                    <a href="Wishlist.php" class="btn wishlist">
                        <i class="fa fa-heart"></i>
                        <span>(0)</span>
                    </a>
                    <a href="Cart.php" class="btn cart">
                        <i class="fa fa-shopping-cart"></i>
                        <span>(0)</span>
                    </a>
                    <a href="Login.php" class="btn login">
                        <i class="fas fa-user"></i>
                        <span>Login
                            <!-- Substituir por < ?php echo $_POST["Classe"] ?> apos logado-->
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Nav Bar Start -->
    <div class="nav justi">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <div class="navbar-nav mr-auto justify-content-center">
                    <a href="Myaccount.php" class="nav-item nav-link">Minha conta</a>
                    <a href="Contact.php" class="nav-item nav-link">Entre em contato</a>
                </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->

</div>
<!-- Bottom Bar End -->

<main class="main">
    <section>