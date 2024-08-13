<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Gateway</title>
    <link href="payment-gateway.css" rel="stylesheet">
    <style>
    
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background: #f4f4f4;
    color: #333;
}

h2 {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 10px 10px 0 0;
}

.contuner {
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

h3 {
    color: #333;
    border-bottom: 2px solid #e7e7e7;
    padding-bottom: 10px;
    margin-bottom: 20px;
    font-size: 24px;
}

input[type="text"], input[type="number"], input[type="password"], textarea, select {
    width: calc(100% - 20px);
    padding: 10px;
    font-size: 16px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
    outline: none;
}

input[type="text"]:focus, input[type="number"]:focus, input[type="password"]:focus, textarea:focus, select:focus {
    border-color: #007BFF;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

textarea#address {
    height: 100px;
    resize: vertical;
}

fieldset {
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 15px;
}

legend {
    font-weight: bold;
    color: #333;
}

input[type="radio"] {
    margin-right: 5px;
}

input[type="submit"], input[type="reset"] {
    padding: 10px 20px;
    font-size: 16px;
    color: #fff;
    background-color: #007BFF;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-left:340px;
}

input[type="submit"]:hover, input[type="reset"]:hover {
    background-color: #0056b3;
}

hr {
    border: none;
    border-top: 1px solid #ddd;
    margin: 20px 0;
}

.payment-icons {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin: 20px 0;
}

.payment-icons img {
    height: 30px;
    width: auto;
}

@media (max-width: 768px) {
    .contuner {
        width: 95%;
        padding: 15px;
   

    </style>
</head>

<body>
    <?php
    session_start();
    $_SESSION['no'] = $_POST["num_name"];
    $a = 1;
    while ($a <= $_POST["num_name"]) {
        $_SESSION['pname' . $a] = $_POST['col2_' . $a];
        $_SESSION['pconno' . $a] = $_POST['col3_' . $a];
        $_SESSION['page' . $a] = $_POST['col4_' . $a];
        $a++;
    }

    $z = $_POST['num_name'];
    $_SESSION["hdcunt"] = $_POST['num_name'];
    $x = $_SESSION['bsnm'];

    $db = mysqli_connect('localhost', 'root', '', 'online_bus') or die("Could not connect to Database");

    $querry = "UPDATE bus_details SET seats_available = seats_available - $z WHERE bus_name = '$x'";
    $result = mysqli_query($db, $querry) or die("Could not execute querry" . mysqli_error($db));
    ?>

    <script>
        function validate() {
            var a, b, c;
            a = document.getElementById("pin_id").value;
            b = document.getElementById("cardNumber_id").value;
            c = document.getElementById("exDate_id").value;
            d = document.getElementById("cvvPass_id").value;
            if (isNaN(a)) {
                alert("Please enter a valid number");
                return false;
            }
            if (isNaN(b)) {
                alert("Please enter a valid number");
                return false;
            }
            if (isNaN(d)) {
                alert("Please enter a valid number");
                return false;
            }

            var currentDate = new Date();
            var day = ("0" + currentDate.getDate()).slice(-2);
            var month = ("0" + (currentDate.getMonth() + 1)).slice(-2);
            var year = currentDate.getFullYear();
            var z = parseInt(year.toString() + month.toString() + day.toString());

            var ne = parseInt(c.replace(/-/g, ''));
            if (ne < z) {
                alert("Please enter a valid card date");
                return false;
            }
        }
    </script>

    <div>
        <h2 class="mainhead"><b><u>Payment Form</u></b></h2>

        <div class="contuner">
            <h3>Contact Information</h3>
            <form action="ticket page.php" autocomplete="off" method="post" onsubmit="return validate()">
                <div>
                    Name: <input type="text" name="myName" required placeholder="Type your name">
                </div>
                <br>
                <div>
                    <fieldset>
                        <legend>Gender</legend>
                        MALE<input type="radio" name="myGndr"> FEMALE <input type="radio" name="myGndr" required>
                    </fieldset>
                </div>
                <br>
                <label for="address">Address</label>
                <div>
                    <textarea name="myText" cols="200" rows="3" id="address"></textarea>
                </div>
                <br>
                <div>
                    Email: <input type="text" name="email_name" id="email_id" required placeholder="example@gmail.com">
                </div>
                <br>
                <div>
                    Pincode: <input type="number" name="pin_name" id="pin_id" required placeholder="111111" minlength="6" maxlength="6">
                </div>
                <br>
                <hr>
                <br>
                <h3>Payment Info</h3>
                <br>
                <div class="payment-icons">
                    <img src="https://img.icons8.com/ios/50/000000/visa.png" alt="Visa">
                    <img src="https://img.icons8.com/ios/50/000000/mastercard.png" alt="MasterCard">
                    <img src="https://img.icons8.com/ios/50/000000/amex.png" alt="American Express">
                    <img src="https://img.icons8.com/ios/50/000000/paypal.png" alt="PayPal">
                </div>
                <br>
                <div>
                    Card type: <select name="myCard">
                        <option value="">--Enter type of card--</option>
                        <option value="masterCard">Master Card</option>
                        <option value="debitCard">Debit Card</option>
                    </select>
                </div>
                <br>
                <div>
                    Card Number: <input type="number" name="cardNumber_name" id="cardNumber_id" required placeholder="1111-2222-3333-4444" minlength="16" maxlength="16">
                </div>
                <br>
                <div>
                    Expiry Date: <input type="date" name="exDate_nam" id="exDate_id" required>
                </div>
                <br>
                <div>
                    CVV: <input type="password" name="cvvPass_name" id="cvvPass_id" minlength="3" maxlength="3" required placeholder="123">
                </div>
                <br>
                <input type="submit" value="Pay Now">
                <br>
                <br>
                <input type="reset" value="Reset">
            </form>
        </div>
    </div>
</body>

</html>
