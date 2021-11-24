<?php if(!isset($_SESSION)) session_start();
$var1 = filter_var(@$_GET['v1'],FILTER_SANITIZE_STRING);
$var2 = htmlentities(filter_var(@$_GET['v2'],FILTER_SANITIZE_STRING));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php 
 if (empty($_SESSION['login'])) {
	 echo '
	 <div class="alert alert-danger">
    <strong>Bigal..kate jeme kamu tuh salah !</strong><a href="index.php" class="alert-link">Login kudai di sini</a>
  </div>
	 ';
	 exit();
 }
?>
<div class="container mt-3">
  <h2><?php echo $var1;?></h2>
  <p>Image at the top (card-img-top):</p>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="images/img_avatar3.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title"><?php echo $var2;?></h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
  <br>
  
  <p>Image at the bottom (card-img-bottom):</p>
  <div class="card" style="width:400px">
    <div class="card-body">
      <h4 class="card-title">Jane Doe</h4>
      <p class="card-text">Some example text some example text. Jane Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
    <img class="card-img-bottom" src="../bootstrap4/img_avatar6.png" alt="Card image" style="width:100%">
  </div>
</div>

</body>
</html>