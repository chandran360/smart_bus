<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport"  content="width=device-width,
				initial-scale=1.0">
	<title>Admin dashboard</title>
	<link rel="stylesheet" href="dashboard.css">
		
			
</head>

<body>
	<header>

		<div class="logosec">
			<div class="logo">Bus Travels</div>
			<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
				class="icn menuicn"
				id="menuicn"
				alt="menu-icon">
		</div>

		

		<div class="message">
			<div class="circle"></div>
			<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png"
				class="icn"
				alt="">
			<div class="dp">
			<img src="4012.jpg"
					class="dpicn"
					alt="dp">
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
							alt="dashboard"><a href="dashboard.html">
						<h3> Dashboard</h3></a>
					</div>


					<div class="nav-option option4">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png"
							class="nav-img"
							alt="institution"><a href="bus management.php">
						<h3> Bus Ticket Booked info</h3></a>
					</div>

					<div class="nav-option option5">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png"
							class="nav-img"
							alt="blog">
						<h3> Profile</h3>
					</div>

					<div class="nav-option option6">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png"
							class="nav-img"
							alt="settings"><a href="">
						<h3> Settings</h3></a>
					</div>

					<div class="nav-option logout">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
							class="nav-img"
							alt="logout"><a href="Home page.html">
						<h3>Logout</h3></a>
					</div>

				</div>
			</nav>
		</div>
		<div class="main">

			<div class="searchbar2">
				<input type="text"
					name=""
					id=""
					placeholder="Search">
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
  
  table {
	font-family: arial, sans-serif;
	border-collapse: collapse;
	width: 100%;
  }
  form {border: 3px solid #0d0c0c;}
  body{
		  
		  background-color:#2262e3;
		  background-size: 100%;
		  background-position: -8px 0px ;
	  
  }
  
  table,td, th {
	border: 1px solid #f6efef;
	text-align: left;
	padding: 8px;
  }
  table{
	
	width: 100%;
	border-collapse:collapse;
	
  }
  th{
	height: 50px;
	border: 1px solid#fff;
		  padding: 20px 30px;
		  color: #140a0a;
		  text-decoration: none;
		  transition: 0.9 sease;
		  font-size: 30px;
  }
  td{
	height: 50px;
	border: 1px solid#fff;
		  padding: 20px 30px;
		  color: #fff;
		  text-decoration: none;
		  transition: 0.9 sease;
		  font-size: 30px;
  }
  
  
  tr:nth-child(even,odd) {
	background-color: #98989f;
  }
  tr{
			  list-style-type: none;
  
		  }
		  tr td{
			transition: 0.16s ease;
		  }
		  tr th{
			 transition: 0.16s ease;
  
		  }
  
		
  .table td {
	  padding-left: 5px;
	  padding-right: 10px;
	  padding-top: 7px;
	  padding-bottom: 7px;
  }
  
  
  .new_table td {
	  padding-right: 40px;
	  padding-top: 7px;
	  padding-bottom: 7px;
  }
  
  .table th {
	  background-color: #166df0;
	  padding-top: 5px;
	  padding-bottom: 5px;
  }
  .h{
	background-color: snow;
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
