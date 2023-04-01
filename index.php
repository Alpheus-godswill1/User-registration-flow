<?php include './conf/db.php'?>
<?php include './function/function.php'?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User registration flow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
  <form class='row p-5' action="./function/function.php" method="post">

  <div class="mb-3 col-md-6 col-sm-12">
    <label for="firstname" class="form-label">First Name</label>
    <input type="" class="form-control" name='first_name' id="firstname" aria-describedby="first-name">
  </div>

  <div class="mb-3 col-md-6 col-sm-12 ">
    <label for="exampleInputEmail1" class="form-label">Last Name</label>
    <input type="last-name" class="form-control"name='last_name' id="last-name" aria-describedby="last-name">
  </div>
  
  <div class=" col-md-6 col-sm-12">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="Username" class="form-control" name='username' id="Username" aria-describedby="Username">
  </div>
  
  <div class="mb-3 col-md-6 col-sm-12">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name='email' id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3 col-md-6 col-sm-12">
    <label for="exampleInputEmail1" class="form-label">Gender</label>
    <select name='gender'>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Privat">Private</option>
    </select>
  </div> 

  <div class="mb-3 col-md-6 col-sm-12">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name='password' class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" name='submit-button' class="btn btn-primary col-sm-12  col-md-6 ">Submit</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
  </body>
</html>