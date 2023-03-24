<?php
include('../php/db_conn.php');
if (isset($_GET['showV'])) {
    $id = $_GET['showV'];
    $sql = "select * from vacancy where vacancyId = $id;";
    $result = mysqli_query($conn, $sql) or die($conn->error);
    $row = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <title>Update Vacancy</title>
    <style>
        body {
            background-image: url('applicant1.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
            font-family: Roboto, sans-seriff;
            margin: 0;
        }

        textarea {
            resize: none;
        }

        input[type=submit] {
            font-weight: bolder;
            border: 0;
            padding: 0.5rem;
            border-radius: 1rem;
            cursor: pointer;
            transition: all 0.5s ease-in;
            background-color: #ffc107;
            color: #000;
        }

        input[type=submit]:hover {
            background-color:#e8bf44b3;
            color: #111;
        }

        .card {
            background-color: rgb(18, 35, 32 , 53%);
           box-shadow: 0 0 9px 0px rgb(238 243 246);
           padding: 1rem;
           border-radius: 0.3rem;
           max-width: 70px;
           min-width: 20%;
           min-height: 300px;
           color:#ffc107;
            padding: 1rem;
            border-radius: 0.3rem;
            max-width: 70px;
            min-width: 20%;
            min-height: 300px;
        }

        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .input {
            padding: 10px;
            margin: auto, 0;
        }

        main{
            height:100%;
        }
    </style>
 

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
    <div class="wrapper">
        <form action="./vacancies.php?updateV=<?php echo $id ?>" method="post" class="card">
            <div class="input">
                <label for="vacancy_name">Position</label><br>
                <input type="text" name="vacancy_name" size=30 value="<?php echo $row['name'] ?>">
            </div>
            <div class="input">
                <label for="details">Details</label><br>
                <textarea name="details" cols="30" rows="10"><?php echo $row['details'] ?></textarea>
            </div>
            <div class="input">
                <label for="min_quallification">Minimum qualification</label><br>
                <input type="text" name="min_quallification" size=30 value="<?php echo $row['minqualification'] ?>">
            </div>
            <div class="input">
                <input type="submit" name="create_vacancy" value="Update Vacancy">
            </div>
        </form>
    </div>
    </main>

    <?php include('../footer.php')?>
</body>

</html>