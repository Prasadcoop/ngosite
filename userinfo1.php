<?php 
$con = mysqli_connect('localhost','id17663039_datauser','%|M]<jntm4\3eAPy','id17663039_detailsinfo');

if($con){
    echo "connection successful";
}else{
    echo " no connection ";
}
mysqli_select_db($con,'id17663039_detailsinfo');
 
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query ="insert into userdetails(user,email,mobile,comment)
values ('$user','$email','$mobile','$comment' ) ";

echo "$query";
mysqli_query($con,$query);
header('location:index.php');
?>