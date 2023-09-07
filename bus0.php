
<html>
<head>
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
  echo "<tr><td>".$row['busname']."</td><td>".$row['busno']."</td><td>".$row['str']."</td><td>".$row['arrival']."</td><td>".$row['typeofbus']."</td><td>".$row['availability1']."</td> 
  <td> "
  ?>
  <a href="businfo.html"> <?php echo $row['additionaldetails'] ?> </a> 
  </td> <?php
 " </tr>";
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
        
        background-color:rgb(19, 137, 221);
        background-size: 110%;
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
.td:hover{
        background-color: rgb(251, 248, 248);
            color: #fff9f9;
       }
.th:hover{
        background-color: rgb(251, 248, 248);
            color: #fff0f0;
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

        tr th:hover{
            background-color: rgb(199, 208, 208);
            color: #fffcfc;}
            tr td:hover{
            background-color: rgb(199, 202, 202);
            color: #fff8f8;}
       tr:hover{
            background-color: rgb(210, 208, 208);
            color: #faf7f7;}
            .table th,
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
</head>
<body>


</body>
</html>