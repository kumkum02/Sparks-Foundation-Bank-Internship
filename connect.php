
<?php
$name =$_POST['name'];
$enterName =$_POST['enterName'];
$enterAmount =$_POST['enterAmount'];

//Database Connection
$conn = new mysqli('localhost', 'root',' ');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into registration(name, enterName, enterAmount) values(?,?,?)");
    $stmt->bind_param("sss",$name,$enterName,$enterAmount)
    $stmt->execute();
    echo "registeration sucessfully...";
    $stmt->close();
    $conn->close();
}
