<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>SING IN</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" type="images/png" href="../favicon.png" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="../embeded/app.css">
</head>
<body>
<section id="sign-up" class="flexy">
<form class="flexy-col">
  <div class="row mb-3">
    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" name="username" placeholder="User name here..." required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="Your email here..." required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password here..." required>
    </div>
  </div>
  <div class="flex-cen">
    <span class="send" onclick="dbMis()">Sign in</span>
    <a href="../../home/" class="home">HOME</a>
    <a href="../register">Register</a> 
  </div>
</form>
</section>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script src="../embeded/app.js" async defer></script>
<script>
    const dbMis = () => {
    alert("Database Missing...")
}
</script>
</body>
</html>