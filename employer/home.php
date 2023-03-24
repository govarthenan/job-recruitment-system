<?php
session_start();
// include("./db.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <style>
        * {
            box-sizing: border-box;
            font-family: roboto;
        }

        body {
            margin: 0;
            background-image: url('emphome.png');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .column {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 20%;
            height: 300px;
            border-radius: 0.4rem;
            transition: all 0.5s ease-in;
            border: 0px;
            text-align: center;
            padding: 1rem;
            background-color: #154850de;
            text-shadow: 1px 1px 5px rgb(255 255 255 / 27%);
        }

        .column:hover {
            box-shadow: 0 0 0 2px #154850d1;
            background-color: #154850d1;
        }

        .column .header {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            display: d-flex;
            gap: 2rem;
            margin: 1rem;
            margin-top: 7rem;
            margin-bottom: 8rem;
            justify-content: space-evenly;

        }

        button {
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
            margin-bottom: 25px;
        }

        button:hover {
            background-color: #dcb747;
            color: #fff;
        }
       
        button:active {
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

    </style>
</head>

<body>
    <nav>
        <ul>
        <a href="./home.php"><li class="name">JobVerteX</li></a>
            <li><a href="../logout.php">Log-Out</a></li>
            <li><a href="./home.php">Home</a></li>
        </ul>
    </nav>
    <div class="center">
        <h1>Hi <?php echo $_SESSION['name'] ?>!</h1>
    </div>
    <div class="container center">
        <div class="column transparent">
            <div class="header">
                <h2>Update & create the vacancies</h2>
            </div>
            <a href="./vacancies.php?show=vacancy"><button> Update Vacancies </button></a>

        </div>
        <div class="column transparent">
            <div class="header">
                <h2>View applicant details</h2>
            </div>
            <a href="./applicant.php?show=applicant"><button> Applicant details</button></a>

        </div>
    </div>
    <?php include('../footer.php')?> 
</body>

</html>