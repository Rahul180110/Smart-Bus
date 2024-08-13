<html>
  <head>
   
<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sih";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data and insert into database
if(isset($_POST['submit'])){
$construction_title= $_POST["construction_title"];
$equpiment_name = $_POST["equpiment_name"];
$budget= $_POST["budget"];
$location = $_POST["location"];




$sql = "INSERT INTO details12 (construction_title, equipment_name, budget, location ) VALUES ('$construction_title','$equpiment_name','$budget','$location')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}


$conn->close();
?>
</head>
<body>
  
  
  <center>
<form action="" method="POST" >
<h2>ADD BUS DETAILS </h2><br><br>
  <div class="container_login">
  <label for="name"><b>Construction title:</b></label>
  <input type="text" id="construction_title" name="construction_title"  class="lable" required>
  <br>
  <br>
  <label for="name"><b>Equipment Name:</b></label>
  <input type="text" id="equipment_name" name="equipment_name"  class="lable" required>
  <br>
  <br>
  <label for="name"><b> Budget:</b></label>
  <input type="text" id=" budget" name=" budget" class="lable"  required>
  <br>
  <br>
  <label for="name"><b>Location:</b></label>
  <input type="text" id="location" name="location" class="lable"  required>
  <br>
 
  <br>
  
  <div class="btnn">
  <input type="submit" value="Submit" name="submit" class="btn_login">
</div>
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
</body>
</html>
