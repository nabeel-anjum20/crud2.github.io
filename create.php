<?php


include "config.php";

if(isset($_POST['submit'])){


$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];

$sql = "INSERT INTO `crud`(name,email,mobile,password) VALUES ('$name','$email','$mobile','$password')";

}

$result = $conn->query($sql);

if($result == true){

echo "data created successfully";


}else{

echo "ERROR:".$sql."<br>".$conn->error;


}

$conn->close();

?>






<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>

<div class = "container my-5">

<form method = "POST">
  <div class="mb-3">
    <label >Name</label>
    <input type="text" class="form-control" placeholder = "Enter yor name" name = "name" autocomplete="off">
</div>

<div class="mb-3">
    <label >Email</label>
    <input type="email" class="form-control" placeholder = "Enter yor email" name = "email" autocomplete="off">
</div>

<div class="mb-3">
    <label >Mobile</label>
    <input type="text" class="form-control" placeholder = "Enter yor mobile number" name = "mobile" autocomplete="off">
</div>


<div class="mb-3">
    <label >Password</label>
    <input type="password" class="form-control" placeholder = "Enter yor password" name = "password">
</div>


  <button type="submit" class="btn btn-primary" value = "submit" name ="submit">Submit</button>
</form>

</div>


</body>
</html>