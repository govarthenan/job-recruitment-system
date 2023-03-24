<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacancy</title>
    <link rel="stylesheet" href="../css/employer2.css">
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
    <div class="container">
        <div class="section blur">
            <div class="section-header">
                <a href="./create_vacancy.php"><button>Create Vacancy</button></a>
            </div>
            <div class="cards">
                <?php
                include('./db.php');
                while ($row = $result->fetch_assoc()) {
                ?>
                    <div class="card">
                        <div class="card-section">
                            <div class="card-header">
                                <p1>Vacancy</p1>
                            </div>
                            <div class="card-body">
                                <p1> Vacancy Name: <br><p2><?php echo $row['name']; ?></p2>
                                    <br /><br />
                                     Minimal Qualification: <br><p2><?php echo $row['minqualification']; ?></p2>
                                     <br /><br />
                                    Details: <br><p2><?php echo $row['details']; ?></p2>
                                </p1>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="?deleteV=<?php echo $row['vacancyId']; ?>">
                                <button>Delete</button>
                            </a>
                            <a href="./update_vacancy.php?showV=<?php echo $row['vacancyId']; ?>">
                                <button>Edit</button>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>  
</main>
    <?php include('../footer.php')?>
    
</body>

</html>