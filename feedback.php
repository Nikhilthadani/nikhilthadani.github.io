<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.js">

    <title>Feedback</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active"  href="index.php">Home</a>
            <a class="nav-link" href="feedback.php">Feedback</a>
            <a class="nav-link" href="contact.php">Contact</a>
          </nav> <hr>
          <h1 class="masthead-brand" >Projects Hub</h1>
        </div>
      </header>

       <form method="post">
       <input type="text" placeholder="Name" name="name"><br>
       <input type="email" placeholder="email" name="email"><br>
       <textarea name="feedback"  cols="30" rows="10" placeholder="GIVE FEEDBACK"></textarea><br>
   <input type="submit">
    <br>
     
    </form>
      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Made By Nikhil Thadani <br> Join us on  <a href="t.me/ProjectsHub">Telegram</a></p>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
<?php
if($_POST){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $fdbk=$_POST['feedback'];
}
?>