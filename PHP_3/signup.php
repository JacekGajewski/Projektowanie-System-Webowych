<?php
require "header.php";
?>

    <div class="jumbotron container">
        <main class="signup-form">
            <h1>Signup</h1>
            <?php
                if (isset($_GET['error'])){
                    if (isset($_GET['error']) == "emptyfields"){
                        echo '<p style="color: red">Fill in all the fields.</p>';
                    }else if (isset($_GET['error']) == "invaliduidmail"){
                        echo '<p style="color: red">Wrong email.</p>';
                    }
                }else if (isset($_GET['signup']) == "success"){
                    echo '<p style="color: green">Sign up success.</p>';
                }
            ?>
            <form action="includes/signup.inc.php" method="post">
                <input class="form-control" type="text" name="uid" placeholder="Username">
                <input class="form-control" type="text" name="mail" placeholder="E-mail">
                <input class="form-control" type="password" name="pwd" placeholder="Password">
                <input class="form-control" type="password" name="pwd-repeat" placeholder="Repeat password">
                <button class="btn btn-outline-secondary" type="submit" name="signup-submit">SIGN UP</button>
            </form>
        </main>
    </div>

<?php
require "footer.php";
?>