..<html>
    <head>
    <img class="bg"
        src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80"
        alt="bus">
        <center>
    <h2>DELETE BUS DETAILS </h2></center><br><br>

</head>
<body>
    <center>
<form action="" method="POST">
<div class="container_login">
  <label for="name"><b>Bus Name:</b></label>
  <input type="text" id="busname" name="busname" required>
  <br><br>
  <input type="submit" value="Submit" name="submit"></div>
</form></center>
<style>
  *{
    font-size: 1.2rem;
    padding: 0%;
    margin: 0%;
    
}
.container{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border: 4px solid salmon;
    border-radius: 13px;
    margin: 115px auto;
    padding: 30px 26px 0px 23px;
    width: 371px;
    height: 412px;
    background-color: #cfcfd6;
}

.bg{
    width: 100%;
    position: absolute;
    z-index: -1;
    opacity: 0.6;
    height: 100vh;
}


input{
    width: 251px;;
    height: 41px;
    border: 2px solid red;
    border-radius: 10px;
    background-color: #ff000000;
}
a{
    margin-top: 7px;
    color: blue;
}
a:hover{
    color: rgb(185, 185, 199);
    
}
.btn{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 109px;
    height: 40px;
    color: #ffffff;
    cursor: pointer;
    background-color: #26222200;
}
.btn:hover{
    background-color: black;
}
.btnn{
    padding-top: 33px;
    display: flex;
    align-items: center;
    justify-content: center;
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