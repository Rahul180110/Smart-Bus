<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Page</title>
    <style>
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}

h1 {
    margin: 0;
    
}


.header {
    padding: 20px;
    background-color: #007bff;
    color: white;
}

.logo {
    padding-top: 20px;
    width: 100px;
    margin-right: 490px;
}

.container_ticket {
    border: 1px solid #ddd;
    width: 80%;
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    box-sizing: border-box;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h1.mainhead {
    font-size: 2em;
    margin: 0;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 12px;
    text-align: center;
}

th {
    background-color: #007bff ;
    color: white;
}

td {
    background-color: #007bff;
}

input[type="text"], input[type="number"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
    outline: none;
    font-size: 16px;
}

input[type="button"] {
    padding: 10px 20px;
    font-size: 16px;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    display: block;
    margin: 0 auto;
}

input[type="button"]:hover {
    background-color: #45a049;
}

@media (max-width: 768px) {
    .container_ticket {
        width: 95%;
        padding: 15px;
    }

    input[type="text"], input[type="number"] {
        width: 100%;
    }
}

    </style>
</head>

<body>
    <script>
        function prnt() {
            window.print();
        }
    </script>
    <div class="container_ticket">
        <div class="header">
            <div class="logo">
                <a href="#"><img src="bus img.gif" alt="Logo"></a>
            </div><center>
            <h1 class="mainhead" ><b><u>TICKET</u></b></h1></center>
        </div>
        <?php
        session_start();
        ?>

        <table>
            <tr>
                <th>Sl no.</th>
                <th>Passenger name</th>
                <th>Contact Number</th>
                <th>Age</th>
            </tr>
            <?php

            // Database credentials
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "sbh";

            // Create a connection to the database
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check the connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Insert ticket information into the database
            $stmt = $conn->prepare("INSERT INTO admin12 (passenger_name, contact_number, age) VALUES (?, ?, ?)");

            $a = 1;
            while ($a <= $_SESSION['hdcunt']) {
                $passenger_name = $_SESSION['pname' . $a];
                $contact_number = $_SESSION['pconno' . $a];
                $age = $_SESSION['page' . $a];

                $stmt->bind_param("ssi", $passenger_name, $contact_number, $age);
                $stmt->execute();

                $a++;
            }

            $a = 1;
            while ($a <= $_SESSION['hdcunt']) {
                echo "<tr>";
                echo "<td>" . $a . "</td>";
                echo "<td>" . $_SESSION['pname' . $a] . "</td>";
                echo "<td>" . $_SESSION['pconno' . $a] . "</td>";
                echo "<td>" . $_SESSION['page' . $a] . "</td>";
                echo "</tr>";
                $a++;
            }
            $stmt->close();
            $conn->close();
            ?>
        </table>

        <br>
        Date of Journey: <input type="text" name="DateofJourney" value="<?php echo $_SESSION['dt']; ?>" readonly>
        <br>
        Head Count: <input type="text" name="Headcount" value="<?php echo $_SESSION['hdcunt']; ?>" readonly>
        <br>
        Bus Name: <input type="text" name="busname" value="<?php echo $_SESSION['bsnm']; ?>" readonly>
        <br>
        From: <input type="text" name="froms" value="<?php echo $_SESSION['frm']; ?>" readonly>
        <br>
        To: <input type="text" name="tos" value="<?php echo $_SESSION['to']; ?>" readonly>
        <br>
        Fare: <input type="number" name="fare" value="<?php echo ($_SESSION['fph'] * $_SESSION['hdcunt']); ?>" readonly>
    </div>
    <input type="button" value="Print" name="print" onclick="prnt()">
</body>

</html>
