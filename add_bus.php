<html>
  <head>
  <img class="bg"
        src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80"
        alt="bus">
        <center>
    <h2>ADD BUS DETAILS </h2></center><br><br>
<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sbh";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data and insert into database
if(isset($_POST['submit'])){
$busname = $_POST["busname"];
$busno = $_POST["busno"];
$str = $_POST["str"];
$arrival = $_POST["arrival"];
$typeofbus = $_POST["typeofbus"];
$availability1 = $_POST["availability1"];
$additionaldetails = $_POST["additionaldetails"];


$sql = "INSERT INTO details12 (busname, busno, str, arrival, typeofbus, availability1, additionaldetails ) VALUES ('$busname','$busno','$str','$arrival','$typeofbus','$availability1','$additionaldetails')";

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
  <div class="container_login">
  <label for="name"><b>Bus Name:</b></label>
  <input type="text" id="busname" name="busname" required>
  <br>
  <br>
  <label for="name"><b>Bus Number:</b></label>
  <input type="text" id="busno" name="busno" required>
  <br>
  <br>
  <label for="name"><b>Starting Time:</b></label>
  <input type="text" id="str" name="str" required>
  <br>
  <br>
  <label for="name"><b>Arrival Time:</b></label>
  <input type="text" id="arrival" name="arrival" required>
  <br>
  <br><label for="name"><b>Type of Bus:</b></label>
  <input type="text" id="typeofbus" name="typeofbus" required>
  <br>
  <br>
  <label for="name"><b>Availability:</b></label>
  <input type="text" id="availability1" name="availability1" required>
  <br>
  <br>
  <label for="name"><b>Additional Details:</b></label>
  <input type="text" id="additionaldetails" name="additionaldetails" required>
  <br>
  <br>
  <div class="btnn">
  <input type="submit" value="Submit" name="submit" class="btn_login">
</div>
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
</body>
</html>
