<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
   
    <style>
      h1 {
    background-color: black;
    opacity: 0.6;
    height: 105px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    width: 100vw;
    color: wheat;
    margin-bottom: 20px;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    position: relative;
    min-height: 100vh;
    background: rgba(255, 255, 255, 0.9);
}

.bg {
    width: 100%;
    position: absolute;
    z-index: -1;
    opacity: 0.6;
    height: 130vh;
    top: 0;
    left: 0;
}

.firstform{
    background: rgba(255, 255, 255, 0.8);
    padding: 25px;
    width: 400px;
    margin: 20px auto;
    font-size: 18px;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}
.secondform {
    background: rgba(255, 255, 255, 0.8);
    padding: 25px;
    width: 900px;
    margin: 20px auto;
    font-size: 18px;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.firstform label, .secondform label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

.firstform select, .secondform select, .firstform input, .secondform input {
    width: calc(100% - 20px);
    padding: 10px;
    font-size: 16px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
}

.submit, .lastbutton {
    padding: 10px;
    background-color: #666666;
    border: none;
    color: white;
    font-size: 17px;
    cursor: pointer;
    border-radius: 5px;
    width: 100%;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover, .lastbutton:hover {
    background-color: black;
    color: wheat;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
}

td input[type="radio"] {
    margin: 0 auto;
    display: block;
}

    </style>
</head>




<body>
    <img class="bg"
        src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80"
        alt="bus">
    <center>
        <h1><u>Ticket Reservations</u></h1>
    </center>
    


    <form action="" method="post" class="firstform">

        from: <select name="src_name" id="src_id">
        <option></option>
            <option value="Chennai">Chennai</option>
            <option value="Bishnupur">Chengalpattu</option>
            <option value="Kolkata">Chidambaram</option>
        </select><br>
        to: <select name="to_name" id="to_id">
        <option></option>
            <option value="Chennai">Chennai</option>
            <option value="Dubrajpurpur">kanchipuram</option>
            <option value="Chidambaram">Chidambaram</option>
        </select><br><br>
        Date of journey: <input type="date" name="date_name" id="date_id">
        <br><br>
        <?php
        session_start();

        ?>

        <input name="submit" type="submit" value="GET DETAILS" class="submit">
        </div>

    </form>



    <br><br>
    <form action="passenger_ info.php" method="post" class="secondform">
        <?php
        if (isset($_POST['submit'])) {
            $frm = $_POST['src_name'];
            $to = $_POST['to_name'];

            $_SESSION["frm"] = $_POST['src_name'];
            $_SESSION["to"] = $_POST['to_name'];
            $_SESSION["dt"] = $_POST['date_name'];

            $db = mysqli_connect('localhost', 'root', '', 'online_bus') or die("Could not connect to Database");

            $querry = "SELECT * FROM bus_details1 WHERE source='$frm' AND destination='$to'";


            if ($result = mysqli_query($db, $querry) or die("Could not execute querry")) {
                print('<table style="border: 2px solid blue;">
    <tr>
        <th>BUS NAME</th>
        <th>STARTING TIME</th>
        <th>FACILITY</th>
        <th> SOURCE</th>
        <th>DESTINATION</th>
        <th>FARE</th>
        <th>VACANT SEATS</th>
        <th>SELECT</th>
    </tr>');

                while ($row = mysqli_fetch_row($result)) {
                    print('<tr>
        <td>' . $row[0] . '</td>
        <td>' . $row[1] . '</td>
        <td>' . $row[2] . '</td>
        <td>' . $row[3] . '</td>
        <td>' . $row[4] . '</td>
        <td align="center"><input type="hidden" value="' . $row[5] . '" name="fair_name">' . $row[5] . '</td>
        <td align="center">' . $row[6] . '</td>
        <td align="center"><input type="radio" name="radio_name" value="' . $row[0] . '"></td>
    </tr> ');
                }
                print('</table>');
            }
        }
        ?>
        <br><br>
        
        <input type="submit" value="Submit" class="lastbutton">
      
    </form>
</body>

</html>