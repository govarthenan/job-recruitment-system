<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/footer.css">
    <title>Home</title>
    <style>
        body {

            margin: 0;
            padding: 0;
            background: url(./images/home1.jpg);
            background-color: #ffffff;
            background-size: cover;
            background-position: center;
            font-family: Helvetica, sans-serif;
            box-sizing: border-box;
        }

        mark {
            color: #ffc412;
            background-color: #113e45;
            border-radius: 10px;
            padding: 10px;
        }

        .welcome {
            color: rgb(99, 99, 99);
            text-align: center;
            margin: 70px;
        }

        .welcome h1 {
            margin: 0;
            color: white;
            margin-top: 100px;

        }

        .welcome h1 span {
            margin: 0;
            font-size: 5.625rem;

        }

        .description h2 {
            color: rgb(202 199 199);
            text-align: center;
            margin-block-start: 109px;
            margin-block-end: 132px;
        }

        .description h3 {
            font-size: 29px;
            margin: 7px;
            padding: 5px;
            text-align: center;
            color: white;
            text-shadow: 2px 2px 9px #ffc107d9;


        }

        .description p {
            margin-block-start: -1em;
            margin-block-end: 1em;
            padding-inline-start: 40px;
            color: #ffc412;
            padding: 14px;
            margin: 11px;
            text-align: center;
        }

        .card {
            min-height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            max-width: 486px;
            height: 291px;
            padding: 5px;
            margin: auto;
            border: 1px solid rgba(255, 255, 255, .25);
            border-radius: 20px;
            background-color: rgb(18, 35, 32, 53%);
            box-shadow: 0 0 9px 0px rgba(238 243 246);
            backdrop-filter: blur(15px);
        }


        .navigation {
            background-color: rgba(219, 222, 253, 0.694);
            margin: 20px;
            padding: 20px;
        }

        .navigation h2 {
            display: inline;
            color: #4e6a8c;
        }

        .navigation button {
            background-color: rgba(252, 175, 88, 0.714);
            font-weight: bold;
            border-width: 0px;
            width: 123px;
            height: 40px;
            border-radius: 10px;
            margin: 10px 50px;
            cursor: pointer;
        }

        .navigation a {
            text-decoration: none;
            color: #4E598C;
        }

        .column-1 {
            width: 50%;
            float: left;
        }

        .column-2 {
            width: 50%;
            float: right;
        }

        :root {
            font-size: 20px;
            box-sizing: inherit;
        }

        .Row {
            display: flex;
            margin-bottom: 3rem;
        }
    </style>
</head>

<body>
    <?php include("./header.php") ?>
    <main>
        <div class="welcome">
            <h1><span>
                    Welcome to
                </span> <br><br><br>
                <mark>JobVerteX</mark>
            </h1>
        </div>


        <div class="description">
            <h2>Connect with your future career or the perfect candidate <br />with just a few clicks </h2><br /><br /><br />

            <div class="Row">
                <div class="column-1">
                    <div class="card">
                        <h3>For<strong> Applicants</strong></h3>
                        <p>View available vacancies from multiple employers who choose jobvortex<br />
                            Choose the ones you’re interested in and apply <br />
                            Get back to the status of your applications.
                        </p>
                    </div>
                </div>

                <div class="column-2">
                    <div class="card">
                        <h3>For <strong>Employers</strong></h3>
                        <p>Create job opportunities to hire people into your organisation<br />
                            Update, make changes or delete details in vacancies that have been created<br />
                            Obtain applications from potential employees.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>


    <?php include('./footer.php') ?>
</body>

</html>