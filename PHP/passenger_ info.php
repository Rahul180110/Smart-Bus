<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>passengers Info</title>
    <link rel="stylesheet" href="./CSS/sign-up.css">
    <style>
       
body {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    background: rgba(255, 255, 255, 0.9);
    color: #333;
}

h1 {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
    margin: 0;
    position: relative;
    z-index: 1;
}

.bg1 {
    width: 100%;
    position: absolute;
    z-index: -1;
    opacity: 0.6;
    height: 120vh;
    object-fit: cover;
    top: 0;
    left: 0;
}

.container_pssngr_1, .container_pssngr_2 {
    background: rgba(255, 255, 255, 0.8);
    padding: 20px;
    margin: 20px auto;
    width: 80%;
    max-width: 800px;
    border-radius: 8px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    position: relative;
    z-index: 2;
}

.container_pssngr_1 {
    margin-bottom: 20px;
}

.container_pssngr_2 {
    text-align: center;
}

input[type="number"], input[type="text"], select {
    width: calc(100% - 20px);
    padding: 10px;
    font-size: 16px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
}

input[type="number"] {
    width: 150px;
}

input[type="button"], input[type="submit"] {
    padding: 10px 20px;
    background-color: #666;
    border: none;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

input[type="button"]:hover, input[type="submit"]:hover {
    background-color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f4f4f4;
}

td {
    background-color: #fff;
}

td input[type="text"] {
    width: 100%;
    border: 1px solid #ddd;
    padding: 5px;
    border-radius: 3px;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

center {
    display: block;
}

@media (max-width: 768px) {
    .container_pssngr_1, .container_pssngr_2 {
        width: 95%;
    }

    table, th, td {
        font-size: 14px;
    }
}

    </style>

</head>

<body>

    <h1>
        <u>Passenger Information</u>
    </h1>
    <img class="bg1" src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="bus">
    <div class="container_pssngr_1">
       
            <?php
            session_start();
            $a = $_SESSION['frm'];
            $b = $_SESSION['to'];
            $c = $_SESSION['dt'];
            $h = $_POST['radio_name'];
            $e = $_POST['fair_name'];
            print("From: " . $a);
            print("<br>");
            print("<br>");
            print("<br>");
            print("To: " . $b);
            print("<br>");
            print("<br>");
            print("<br>");
            print("Date: " . $c);
            print("<br>");
            print("<br>");
            print("<br>");
            print("Bus Name: " . $h);
            print("<br>");
            print("<br>");
            print("<br>");
            print("Bus Fare: " . $e);
            print("<br>");
            print("<br>");
            
            $_SESSION["fph"] = $_POST['fair_name'];
            $_SESSION["bsnm"] = $_POST['radio_name'];
            ?>
    </div>
    <form action="payment page.php" method="post" onsubmit=" return validate()">
    <script language="javascript">
        var d, count = 1;
        
        function addrw() {
            d = document.getElementById("num_id").value
            var mytab = document.getElementById("t1");
            var v;
            if (count <= d) {
                v = 1;
                while (count <= d) {
                    var r1 = mytab.insertRow();
                    var c1 = r1.insertCell();
                    var c2 = r1.insertCell();
                    var c3 = r1.insertCell();
                    var c4 = r1.insertCell();

                    c1.innerHTML = v;
                    c2.innerHTML = "<input type='text' name='col2_"+v+"' required>";
                    c3.innerHTML = "<input type='text' name='col3_"+v+"' id='col3" + v + "' required>";
                    c4.innerHTML = "<input type='text' name='col4_"+v+"' required>";
                    count++;
                    v++;
                }
            } else {
                alert("No number has been entered");
            }
            return false;

        }

        function delrw() {
            var c = document.getElementById("num_id").value;
            document.getElementById("t1").deleteRow(c);
            c = c - 1;
            document.getElementById("num_id").value = c;
        }

        function validate() {
            var i, s;
            for (i = 1; i <= d; i++) {
                s = document.getElementById("col3" + i).value;
                if (isNaN(s)) {
                    alert("Please enter a valid number");
                    return false;
                }
            }
            return true;



        }
    </script>

    <div class="container_pssngr_2">

        Number of passengers: <input type="number" id="num_id" name="num_name" required><br><br>
        <input type="button" value="GET ROWS" id="gtrws_id" onclick="addrw()">
        <br><br>
        <table id="t1">
            <tr>
                <center>
                    <td>SL No.</td>
                </center>
                <center>
                    <td>Passenger name</td>
                </center>
                <center>
                    <td>Contact number</td>
                </center>
                <center>
                    <td>Age</td>
                </center>
            </tr>
        </table>
        <br><br>
        <input type="button" value="DELETE ROW" id="delrw_id" onclick="delrw()">

        <br><br>
        <br>
        <input type="submit" class="btn_pssngr" value="Go to payment details">
        </form>
    </div>

</body>

</html>
