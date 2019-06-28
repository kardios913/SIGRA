<?php
include_once '../facade/facSiEgre.php';
$facade = facSiEgre::getInstance();
session_start();
if (empty($_SESSION['documento'])) {
    ?>
    <!DOCTYPE>
    <html>
        <head>
            <title>SIGRA-Login Graduados</title>
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <link href="../assets/css/main.css" rel="stylesheet" id="bootstrap-css">

        </head>
        <body>
            <div class="wrapper fadeInDown">
                <div id="formContent">
                    <!-- Tabs Titles -->

                    <!-- Icon -->
                    <div class="fadeIn first">
                        <h1>SIGRA</h1>
                    </div>

                    <!-- Login Form -->
                    <form method="POST" action="../controlador/LoginGraduado.php">
                        <input type="text" id="documento" class="fadeIn second" name="documento" placeholder="Documento">
                        <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
                        <input type="submit" class="fadeIn fourth" value="Log In">
                    </form>

                    <!-- Remind Passowrd -->
                    <div id="formFooter">
                        <a class="underlineHover" href="#">Forgot Your Password?</a>
                    </div>

                </div>
            </div>   
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   
        </body>
    </html>
    <?php
} else {
    header("location:../vista/FormGraduado.php");
}
?>