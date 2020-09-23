<!DOCTYPE html>
<head>
<meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="Calvin Mak, portfolio">
  <meta name="author" content="Calvin">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.scss" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
  <title>My Portfolio</title>
</head>
<body>
<header><p style="text-align:center;">My Portfolio</p></header>
<nav></nav>
<div>
    <?php 
      include 'database.php';
      $filter_flags = array("Web","Mobile Apps", "Algorithms", "Computer Graphics", "Operating Systems", "Java", "Kotlin", "C++", "Open GL", "Python", "Racket");
    ?>
    <form method="post" action="./search.php">
        <div class="filter-inline">
          <?php
              for($x = 0; $x < sizeof($filter_flags);$x++) {
                echo "<label><input id=\"{$filter_flags[$x]}\" type=\"checkbox\">{$filter_flags[$x]}</label>";
              }
          ?>
        </div>
        <br />
        <input type="text" value="Search..." />
        <input type="submit" value="Search" />
    </form>
</div>
<?php
  include 'contacts.php';
?>
</body>
</html>