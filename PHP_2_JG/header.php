<?php
session_start();
if (isset($_GET['choice'])){
    $choice = $_GET['choice'];
    if ($choice == "bug" || $choice == "dark" || $choice == "default"){
        setcookie("sitestyle", $choice, time() + 60 * 60 * 24 * 30);
        header("Location: ../PHP_2_JG/header.php");
        exit();
    }
}

include 'css_cookie_check.php'
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Ksiazkowo</title>
    <link rel="stylesheet" type="text/css" href="style/<?php echo $styleChoice;?>/style.css">

</head>
<body>

<div class="jumbotron" style="margin-bottom: 0">
    <h1>Książkowo</h1>
</div>

<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">

    <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapse_target">

        <!--<a class="navbar-brand"><img src="icon.jpg" alt="logo"></a>-->
        <!--<span class="navbar-text">Text</span>-->

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Strona domowa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">O nas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="reviews.php">Recenzje</a>
            </li>
            <?php
                if (isset($_SESSION['userId'])){
                   echo '<li class="nav-item">
                             <a class="nav-link" href="twojeKsiazki.php">Twoje książki</a>
                          </li>';
                }?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">
                    Style
                    <span class="caret"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdown_target">
                    <a class="dropdown-item" href="header.php?choice=dark">Dark</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="header.php?choice=bug">Bug</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="header.php?choice=default">Default</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="diagnostyka.php">Diagnostyka</a>
            </li>
            <li class="nav-item">
                <?php
                if (isset($_SESSION['userId'])){
                    echo '<form action="includes/logout.inc.php" method="post">
                    <button class="btn btn-outline-secondary" type="submit" name="logout-submit">Logout</button>
                </form>';
                }else{
                    echo '<form class="form-inline order-md-last" action="includes/login.inc.php" method="post">
                            <input type="text"  class="form-control mr-sm-2" name="mailuid" placeholder="Username/E-mail...">
                            <input type="password" class="form-control mr-sm-2" name="pwd" placeholder="Password">
                            <button type="submit" class="btn btn-outline-secondary my-3 my-sm-0" name="login-submit">Login</button>
                        </form>
                    </li>
                    <li class="nav-item">
                     <a class="btn btn-outline-secondary" href="signup.php">Signup</a>';
                }
                setcookie("name", "Daniel", time() + 86400);
                $_SESSION['name'] =  "123";

                ?>

            </li>

<!--            <li class="nav-item">-->
<!--                -->
<!--            </li>-->
        </ul>
    </div>
</nav

<!--<div class="jumbotron container">-->
<!--    <h1 class="display-4">Hello, world!</h1>-->
<!--    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>-->
<!--    <hr class="my-4">-->
<!--    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>-->
<!--    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>-->
<!--</div>-->

</body>
</html>