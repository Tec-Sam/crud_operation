<?php
include 'connect.php';
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
    <h1 class="text-center bg-dark text-white p-3">CRUD OPERATION</h1>
  <div class="container mt-3">
    <a  href="user.php" class="btn btn-primary">Add User</a>

    <table class="table mt-3 table-striped table-responsive table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

<?php

$sql = "select * from `crud`";
$result=mysqli_query($con, $sql);
if($result){

while( $row=mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $password = $row['password'];

    echo ' <tr>
      <th scope="row">'. $id .'</th>
      <td>'. $name .'</td>
      <td>'. $email .'</td>
      <td>'. $mobile .'</td>
      <td>'. $password .'</td>
    <td>
    <a href="update.php?updateid='.$id.'" class="btn btn-success btn-sm">Update</a>
    <a href="delete.php?deleteid='. $id .'" class="btn btn-danger btn-sm">Delete</a>

    </td>
    </tr>';
    }
}

?>
   
   
  </tbody>
</table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>