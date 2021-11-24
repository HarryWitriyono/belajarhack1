<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Contoh Login Vulnerable</h2>
  <form action="" method="post">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <button type="submit" class="btn btn-primary" name="bLogin">Submit</button>
  </form>
</div>
</body>
</html>
<?php 
if (isset($_POST['bLogin'])) {
 $email=filter_var(htmlentities($_POST['email']),FILTER_SANITIZE_STRING);
 $pswd=$_POST['pswd'];
 if (($email=='harrywitriyono@gmail.com') and ($pswd=='1qaz2wsx')) {
	 if (!isset($_SESSION)) session_start();
	 $_SESSION['login']='adalogin';
	 echo "<script>window.location.href='xssmenu.php';</script>";
 } else {
	 echo '
	 <div class="alert alert-dark">
    <strong>Bigal..kate jeme kamu tuh salah !</strong>
  </div>
	 ';
 }
}
?>