<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport"  content="width=device-width,initial-scale=1.0">
	<title>Admin dashboard</title>
	<link rel="stylesheet" href="../CSS/dashboard.css">
		
			
</head>

<body>
	<header>

		<div class="logosec">
			<div class="logo">Bus Travels</div>
			<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png" class="icn menuicn" id="menuicn" alt="menu-icon">
		</div>

		

		<div class="message">
			<div class="dp">
			<img src="4012.jpg" class="dpicn" alt="dp">
			</div>
		</div>

	</header>

	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">
					<div class="nav-option option1">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
							class="nav-img"
							alt="dashboard">
						<h3> Dashboard</h3></a>
					</div>


					<div class="nav-option option4">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png"
							class="nav-img"
							alt="institution"><a href="bus management.php">
						<h3> Bus Ticket Booked info</h3></a>
					</div>

					<div class="nav-option option5">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png" class="nav-img" alt="blog"><a href="#">
						<h3> Profile</h3></a>
					</div>

					<div class="nav-option option6">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png" class="nav-img"alt="settings"><a href="#">
						<h3> Settings</h3></a>
					</div>

					<div class="nav-option logout">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
							class="nav-img"
							alt="logout"><a href="../Index.html">
						<h3>Logout</h3></a>
					</div>

				</div>
			</nav>
		</div>
		<div class="main">

			<div class="searchbar2">
			
				<div class="searchbtn">
				<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
						class="icn srchicn"
						alt="search-button">
				</div>
			</div>   
			<center>
			<h2 class="h">Details of Ticket Booked </h2>
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
			$sql = "SELECT passenger_name,contact_number,age  FROM Admin12";
			$result = mysqli_query($conn, $sql);
			
			// Display data in an HTML table
			echo "<table>";
			echo "<tr><th>Passenger Name</th><th>Contact Number</th><th>Age</th></tr>";
			while ($row = mysqli_fetch_assoc($result)) {
			  echo "<tr><td>".$row['passenger_name']."</td><td>".$row['contact_number']."</td><td>".$row['age']."</td></tr>";
			}
			echo "</table>";                                                                                                                                                                                                  
			
			// Close the database connection
			mysqli_close($conn);
			?>
			<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

/* Body */
body {
    background-color: #f4f4f9;
    color: #333;
}

/* Header */
header {
    background-color: #007bff;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 2rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.logosec {
    display: flex;
    align-items: center;
}

.logo {
    font-size: 1.5rem;
    font-weight: bold;
}

.icn.menuicn {
    margin-left: 1rem;
    cursor: pointer;
}

.message {
    display: flex;
    align-items: center;
}

.circle {
    width: 10px;
    height: 10px;
    background-color: red;
    border-radius: 50%;
    margin-right: 0.5rem;
}

.icn {
    width: 24px;
    height: 24px;
    margin-right: 1rem;
    cursor: pointer;
}

.dp {
    display: flex;
    align-items: center;
}

.dpicn {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 2px solid white;
}

/* Navigation */
.navcontainer {
    width: 250px;
    background-color: white;
    color: white;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    padding-top: 2rem;
    transition: all 0.3s ease;
}

.navclose {
    width: 80px;
}

.nav {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.nav-upper-options {
    width: 100%;
}

.nav-option {
    display: flex;
    align-items: center;
    padding: 1rem;
    width: 100%;
    cursor: pointer;
    transition: background 0.3s;
}


.nav-img {
    width: 30px;
    height: 30px;
    margin-right: 1rem;
}

h3 {
    font-size: 1rem;
    font-weight: normal;
}

/* Main Container */
.main-container {
    margin-left: 250px;
    padding: 2rem;
    transition: margin-left 0.3s ease;
}

.main {
    max-width: 1200px;
    margin: auto;
}

.searchbar2 {
    display: flex;
    margin-bottom: 2rem;
    background-color: white;
    border-radius: 50px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.searchbar2 input {
    border: none;
    padding: 0.75rem 1rem;
    flex: 1;
    font-size: 1rem;
}

.searchbar2 input:focus {
    outline: none;
}

.searchbtn {
    background-color: #007bff;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0.75rem 1rem;
    cursor: pointer;
}

.searchbtn img {
    width: 20px;
    height: 20px;
}

/* Boxes */
.box-container {
    display: flex;
    justify-content: space-between;
    margin-bottom: 2rem;
}

.box {
    background-color: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    flex: 1;
    margin-right: 1rem;
    text-align: center;
}

.box:last-child {
    margin-right: 0;
}

.topic-heading {
    margin-bottom: 1rem;
}

.box img {
    width: 100px;
    height: auto;
}

/* Report Container */
.report-container {
    background-color: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.report-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
}

.recent-Articles {
    font-size: 1.5rem;
}

.view {
    background-color: #007bff;
    color: white;
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background 0.3s;
}

.view:hover {
    background-color: #0056b3;
}

.report-body {
    overflow-x: auto;
}

.report-topic-heading {
    display: flex;
    justify-content: space-between;
    padding: 1rem 0;
    border-bottom: 2px solid #f4f4f9;
    margin-bottom: 1rem;
}

.items .item1 {
    display: flex;
    justify-content: space-between;
    padding: 1rem 0;
    border-bottom: 1px solid #f4f4f9;
}

.t-op-nextlvl {
    flex: 1;
    text-align: center;
}

.label-tag {
    color: green;
    font-weight: bold;
}

/* Responsive Design */
@media (max-width: 768px) {
    .navcontainer {
        width: 80px;
    }

    .main-container {
        margin-left: 80px;
    }

    .box-container {
        flex-direction: column;
    }

    .box {
        margin-bottom: 1rem;
    }

    .box:last-child {
        margin-right: 1rem;
    }

    .report-topic-heading, .items .item1 {
        display: block;
        text-align: left;
    }

    .t-op-nextlvl {
        text-align: left;
    }
}

/* Table */
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

th, td {
    border: 1px solid #ddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

th {
    background-color: #007bff;
    color: white;
}

.h {
    text-align: center;
    margin: 2rem 0;
    font-size: 2rem;
}

  </style>
     

	<script>
let menuicn = document.querySelector(".menuicn");
let nav = document.querySelector(".navcontainer");

menuicn.addEventListener("click",()=>
{
	nav.classList.toggle("navclose");
})
</script>

</body>
</html>
