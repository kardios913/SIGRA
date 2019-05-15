<!DOCTYPE>
<html>
<head>
<title>SIEGRE-Login Egresado</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="assets/css/main.css" rel="stylesheet" id="bootstrap-css">

</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h1>SIEGRE</h1>
    </div>

    <!-- Login Form -->
    <form action='vista/LoginAdmin.php'>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Codigo">
      <input type="password" id="password" class="fadeIn third" name="login" placeholder="Password">
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