<?php

include 'connect.php';
if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql="insert into `crud` (name, email , mobile , password)
    values ('$name', '$email', '$mobile', '$password')";

    $result = mysqli_query($con, $sql);
    if($result){
        // echo "data insert successfully";
        header('location:table.php');
    }else{
        die(mysqli_error($con));
    }}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center bg-dark text-white p-3">User, Form</h1>
    <div class="container">
        
        <div class="row justify-content-center">
        <div class="col-md-8 col-12">
            
        <form action="" method="post">
            <div class="form-group mb-3">
                <label for="">Name</label>
                <input type="text" name="name" placeholder="Enter your name" required class="form-control ">
            </div>
            <div class="form-group mb-3">
                <label for="">Email</label>
                <input autocomplete="false" type="email" name="email" required  placeholder="Enter your email" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Mobile</label>
                <input type="number" name="mobile" placeholder="Enter your mobile" required  class="form-control" >
            </div>
            <div class="form-group mb-3">
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Enter your password" required  class="form-control">
            </div>
             <!-- <a  href="table.php" class="btn btn-secondary">Back</a> -->
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        </div> 
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>