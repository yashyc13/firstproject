<?php
include("connection.php");
error_reporting(0);
?>

<html>

<head>
    <title>Patients details fill page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <header>
        <nav>

            <div class="insert">
                <form align="center" action="" method="GET">
                    <h1>Enter Patient Information Here </h1><br>
                    Patient number &nbsp;&nbsp; <input placeholder="Number" type="text" name="num" required value="" autofocus /><br><br>
                    Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input placeholder="Name" type="text" name="nm" value="" required /><br><br>
                    City &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input placeholder="city" type="text" name="city" value="" required /><br><br>
                    <input type="Submit" name="Submit" value="Submit" class="but" /></br>
                    <?php
                    if ($_GET['Submit']) {
                        $number = $_GET['num'];
                        $nm = $_GET['nm'];
                        $city = $_GET['city'];
                        if ($number != "" && $nm != "" && $city != "") {
                            $query = "INSERT INTO PATIENT1 VALUES ('$number','$nm','$city')";
                            $data = mysqli_query($conn, $query);
                            if ($data) {
                                echo "</br>Data Is Inserted into database";
                            }
                        } else {
                            echo "</br> Enter All information ";
                        }
                    }
                    ?>
                    </br>
                    <br>
                    <h6>Click here For <a href="display.php" target="">Databse </a>
                    </h6>
                </form>
            </div>
        </nav>

        <h6>Design by<a href="www.yashchaudhari.tk" target="_blank"> yash chaudhari</a>
        </h6>
    </header>
</body>

</html>