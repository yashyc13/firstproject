<?php
include("Connection.php");
error_reporting(0);
?>
<html>
<title>Document</title>

<head>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>

<body>
    <div>
    <header>
        <table>
            <h2>For Entry Page <a href="insert.php" target="">Click Here </a></h2>
            <?php
            /* $query =  "SELECT * FROM patient1 "; */
            $query = "SELECT * FROM `patient1` ORDER BY `pnumber` ASC";
            $data = mysqli_query($conn, $query);
            $total = mysqli_num_rows($data);
            echo "
            <h1>Total number of records " . $total . "</h1><br>
            <tr>
            <th> Roll Number </th>
            <th> Name </th>
            <th> Class </th> </tr>
            ";
            if ($total != 0) {
                while ($result = mysqli_fetch_assoc($data)) {
                    echo "<tr><td>" . $result['pnumber'] . "</td><td> " . $result[pname] . "</td> <td> " . $result[paddress] . "</td></tr><br>";
                }
                echo "</table>";
            } else {
                echo "No record found";
            }
            ?>
            <br>
    </header>
        </div>
</body>

</html>














































<!--->

<html>
<title>Document</title>

<head>
    <title>Patients details fill page</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>

<body>
    <header>
        <table>

            <?php
           /* include("connection.php");
            error_reporting(0);

            $query =  "SELECT * FROM patient1";
            $data = mysqli_query($conn, $query);
            $total = mysqli_num_rows($data);
            echo "
            <h1>Total number of records " . $total . "</h1><br>
            <tr>
            <th> Number </th>
            <th> Name </th>
            <th> City </th> </tr>
            ";
            if ($total != 0) {
                while ($result = mysqli_fetch_assoc($data)) {
                    echo "<tr><td>" . $result['pnumber'] . "</td><td> " . $result[pname] . "</td> <td> " . $result[paddress] . "</td></tr><br>";
                }
                echo "</table>";
            } else {
                echo "No record found";
            }
            ?>
            <br>
            <h2>For Entry Page <a href="insert.php" target="">Click Here</a>
            </h2>
    </header>
</body>

</html>  */