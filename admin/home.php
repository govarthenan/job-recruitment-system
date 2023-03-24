<?php
session_start();
if(!isset($_SESSION['uName'])){
  header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>admin home</title>
  <style>
    html{
      overflow-x:hidden;
    }
    body {
      background-image: url("applicant1.jpeg");
      background-size: cover;
      font-family: sans-serif;
      height: 800px;
      margin: 0;
    }

    .column {
      float: left;
      width: 33.30%;
    }

    .column img {
      margin: 200px auto 0;
      padding: 12px 225px;
    }

    .row{
      position: absolute;
    }

    .row:after {
      display: table;
    }

    .button {
      margin: 25px auto 0;
    }

    .button a {
      width: 300px;
      text-decoration: none;
      display: inline-block;
      margin: 0 125px;
      padding: 12px 0;
      color: #ffc107;
      background-color: #113e45c2;
      border: 0.5px solid #ffffff;
      text-align: center;
      position: relative;
      z-index: 1;
      transition: color 0.5s;
      font-family: Trebuchet MS;
    }

    .button a span {
      width: 0%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      background: #ffffff;
      z-index: -1;
      transition: 0.5s;
    }

    .button a:hover span {
      width: 100%;
    }

    .button a:hover {
      color: #000000;
    }
    
    main{
      height: 100% ;
    }

  </style>
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/footer.css">
    
</head>

<body>
  <header>
    <nav>
      <ul>
      <a href="./home.php"><li class="name">JobVerteX</li></a>
        <li><a href="../logout.php">Log-Out</a></li>
        <li><a href="./home.php">Home</a></li>
      </ul>
    </nav>
  </header>

  <main>
  <div class="row">
    <div class="column">
      <img src="../images/user.png" width="100px" height="100px">
      <div class="button">
        <a href="./applicant.php?show=applicant"><span></span>User Management</a>
      </div>
    </div>
    <div class="column">
      <img src="../images/employer.png" width="100px" height="100px">
      <div class="button">
        <a href="./employer.php?show=employer"><span></span>Employer Management</a>
      </div>
    </div>
    <div class="column">
      <img src="../images/vacancy.png" width="100px" height="100px">
      <div class="button">
        <a href="./vacancy.php?show=vacancy"><span></span>Vacancy Management</a>
      </div>
    </div>
  </div>
  </main>

  <?php include('../footer.php') ?>
</body>

</html>