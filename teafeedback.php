<?php
session_start();
$smail = $_SESSION["email"];

$email = $_GET['email'];
$name = $_GET['name'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>give feedback</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
  />
  <style>
    body{
     background-image: linear-gradient(to right, rgba(175, 222, 239, 0.9) , rgb(221, 201, 240))
  }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">TES</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="main.html">Home</a>
              </li>

               
              <li class="nav-item">
                <a class="nav-link" href="tfeedback.php">Teacher Feedback</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <br><br><br>

<form action="teamess.php" method="post">

<div class="container col-md-8">

<div class="mb-3">
  <label for="Inputname" class="form-label">Teacher Name</label>
  <input type="text" class="form-control " id="Inputname" name="name"  value="<?php echo $name; ?>" Readonly>
</div>

<div class="mb-3">
  <label for="Inputemail" class="form-label">Teacher Email address</label>
  <input type="email" class="form-control" id="Inputemail" name="email"  value="<?php echo $email; ?>" Readonly>
</div>
<div class="mb-3">
  <label for="Textarea1" class="form-label">Enter Your Feedback</label>
  <textarea class="form-control" id="Textarea1" name="feedback"  rows="6"></textarea>
</div>

<div class="mb-3">
  <label for="givenfeedback" class="form-label">Feedback given by</label>
  <input type="text" class="form-control" id="givenfeedback" name="givenby"  value="<?php echo $smail; ?>" Readonly>
</div>

<button class="btn btn-success">Send Feedback</button>
</div>
    
</form>

</body>
</html>