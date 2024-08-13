..<html>
    <head>

</head>
<body>
    <center>
<form action="" method="POST">

<h2>DELETE BUS DETAILS </h2><br><br>

<div class="container_login">
  <label for="name"><b>Bus Name:</b></label>
  <input type="text" id="busname" name="busname" class="lable" required>
  <br><br>
  <input type="submit" value="Submit" name="submit"></div>
</form></center>
<style>
 body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: url('https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80') no-repeat center center fixed;
  background-size: cover;
}

h2 {
  color: #ffffff;
  text-shadow: 2px 2px 4px #000000;
  margin-top: 20px;
  text-align: center;
}

.container_login {
  background-color: rgba(255, 255, 255, 0.9);
  padding: 30px;
  border-radius: 15px;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  width: 600px;
  max-width: 500px;
  animation: fadeIn 1s ease-in-out;
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

label {
  display: block;
  margin-bottom: 8px;
  color: #333333;
  font-weight: bold;
}

input[type="text"] {
  width: 100%;
  padding: 12px;
  margin-bottom: 20px;
  border: 1px solid #cccccc;
  border-radius: 5px;
  box-sizing: border-box;
  transition: border-color 0.3s ease;
}

input[type="text"]:focus {
  border-color: #4CAF50;
  outline: none;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  width: 100%;
  transition: background-color 0.3s ease, transform 0.3s ease;
}

input[type="submit"]:hover {
  background-color: #45a049;
  transform: scale(1.05);
}

.btnn {
  display: flex;
  justify-content: center;
}

@media (max-width: 480px) {
  .container_login {
    padding: 20px;
    width: 90%;
  }

  input[type="text"],
  input[type="submit"] {
    padding: 10px;
    margin-bottom: 15px;
  }
}

</style>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sbh";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['busname'])){
// Check the connection
$busname=$_POST['busname'];
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the SQL query to delete data
$sql = "DELETE FROM details12 WHERE busname = '$busname'";
// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
}
// Close the connection
$conn->close();
?>
</body>
</html>