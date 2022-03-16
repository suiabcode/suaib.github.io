<<<<<<< HEAD

<?php

$servername="localhost";
$username="root";
$password="";
$dbname="focusstudy";
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
{
    die("Connection failed: " . mysqli_connect_error()); 
}else{
    echo "Connection successfully";
}
if(isset($_POST['sb'])){
    $email=$_POST['email'];
    $psw=$_POST['psw'];
    $sql="INSERT INTO data (username,password) VALUES ('$email','$psw')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "data is inserted";
        
    }
    else
    {
        echo "data is not inserted";
    }
}


=======

<?php

$servername="localhost";
$username="root";
$password="";
$dbname="focusstudy";
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
{
    die("Connection failed: " . mysqli_connect_error()); 
}else{
    echo "Connection successfully";
}
if(isset($_POST['sb'])){
    $email=$_POST['email'];
    $psw=$_POST['psw'];
    $sql="INSERT INTO data (username,password) VALUES ('$email','$psw')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "data is inserted";
        
    }
    else
    {
        echo "data is not inserted";
    }
}


>>>>>>> 7ad374bb8c40d062f8d2281cc6e4f4cd0d118f49
?>