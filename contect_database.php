<<<<<<< HEAD


<?php

$servername="localhost";
$username="root";
$password="";
$dbname="focusstudy"; 

  $con=mysqli_connect($servername,$username,$password,$dbname);
  if(!$con){
    die("connection failed:".mysqli_connect_error());
  }else{
    echo "connection successfull";
  }

 if(isset($_POST['sbf'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $country=$_POST['country'];
    $subject=$_POST['subject'];
    // $query="INSERT INTO  register (FIRST NAME,LAST NAME,COUNTRY,SUBJECT) VALUES ('$firstname','$lastname','$country','$subject')";
    $query= " INSERT INTO `register` (`name`, `lastname`, `country`, `subject`) VALUES ('$firstname', '$lastname', '$country', '$subject')";
    $run=mysqli_query($con,$query);
    if($run){
        echo "data is inserted";
    }
    else{
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
  if(!$con){
    die("connection failed:".mysqli_connect_error());
  }else{
    echo "connection successfull";
  }

 if(isset($_POST['sbf'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $country=$_POST['country'];
    $subject=$_POST['subject'];
    // $query="INSERT INTO  register (FIRST NAME,LAST NAME,COUNTRY,SUBJECT) VALUES ('$firstname','$lastname','$country','$subject')";
    $query= " INSERT INTO `register` (`name`, `lastname`, `country`, `subject`) VALUES ('$firstname', '$lastname', '$country', '$subject')";
    $run=mysqli_query($con,$query);
    if($run){
        echo "data is inserted";
    }
    else{
        echo "data is not inserted";
    }


}
>>>>>>> 7ad374bb8c40d062f8d2281cc6e4f4cd0d118f49
?>