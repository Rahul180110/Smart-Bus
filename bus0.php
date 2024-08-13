<html>
<head>
  <title>SIRKALI TO MAYILADUTHURAI</title>

<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 20px;
  }

  h2 {
    text-align: center;
    color: #343a40;
    margin-bottom: 20px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    font-size: 16px;
    text-align: left;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    background-color: #fff;
  }

  table th, table td {
    padding: 12px 15px;
    border: 1px solid #dee2e6;
  }

  table th {
    background-color: #343a40;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 1px;
  }

  table tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  table tr:hover {
    background-color: #e9ecef;
  }

  table tr td a {
    color: #007bff;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  table tr td a:hover {
    color: #0056b3;
    text-decoration: underline;
  }

  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }
</style>

</head>
<body>
<center>
<h2 class="h">SIRKALI TO MAYILADUTHURAI</h2>
</center>
<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sbh";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from the table
$sql = "SELECT busname , busno, str, arrival, typeofbus, availability1, additionaldetails FROM details12";
$result = mysqli_query($conn, $sql);

// Display data in an HTML table
echo "<table>";
echo "<tr><th>Bus Name</th><th>Bus Number</th><th>Start Time</th><th>Arrival Time</th><th>Type of Bus</th><th>Availability</th><th>Additional Details</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr><td>".$row['busname']."</td><td>".$row['busno']."</td><td>".$row['str']."</td><td>".$row['arrival']."</td><td>".$row['typeofbus']."</td><td>".$row['availability1']."</td>  <td> "
  ?>
  <a href="businfo.html"> <?php echo $row['additionaldetails'] ?> </a> 
  </td> <?php
 " </tr>";
}
echo "</table>";                                                                                                                                                                                                  

// Close the database connection
mysqli_close($conn);
?>

</body>
</html>