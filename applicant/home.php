<?php
    session_start();
    // include("./db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <style>
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-image: url('emphome.png');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .wrapper {
            font-family: 'Roboto';
            color: #000000;
            text-shadow: 1px 1px 5px rgb(255 255 255 / 27%);
            text-align: justify;
            display: flex;
            padding: 100px 0;
            flex-wrap: wrap;
            justify-content:space-evenly;
          
        }
        .selection {
            margin: 13px 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #154850de;
            background-size: auto;
            background-repeat: no-repeat;
            border-radius: 10px;
            width: 20%;
            height: 300px;
            justify-content: center;
        }

        .selection:hover {
            box-shadow: 0 0 0 2px #154850d1;
            background-color: #154850d1;
        }

        .selection button {
            background-color: #dcb747a3;
            border-radius: 28px;
            border: 0;
            display: inline-block;
            cursor: pointer;
            color: #ffffff;
            font-family: Verdana;
            font-size: 12px;
            font-weight: bold;
            padding: 16px 31px;
            text-decoration: none;
        }
        .selection button:hover {
            background-color: #dcb747;
        }
        .selection button:active {
            position: relative;
            top: 1px;
        }
        h1 {
            color: #ffffff;
            text-shadow: 5px 3px 5px rgb(215 165 15 / 89%);
            font-size :50px;
        }

        h2{
           color:#fff; 
        }

        .name{
            color:#ffc107;
        }

    </style>
    <title>Home</title>
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
    <div class="center">
        <h1>Hi <?php echo $_SESSION['name']?>!</h1>
    </div>
    <div class="wrapper">
        
        <div class="selection">
            <h2>Find your dream job...</h2>
            <a href="./vacancies.php?show=vacancy"><button>Vacancies</button></a>
            
        </div>
        <div class="selection">
            <h2>Waiting for interview</h2>
            <a href="./pending.php?show=pending"><button>Pending Applications</button></a>
            
        </div>
    </div>
    <?php include('../footer.php') ?>
</body>
</html>