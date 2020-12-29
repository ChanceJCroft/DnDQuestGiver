<html lang="en">
<head>
    <?php include_once './config/config.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DnD_Quests</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="//db.onlinewebfonts.com/c/cf85131ef1119a8d56e92cd8ff533995?family=Sylfaen" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="container">
    <div class="header">
    <h3 class="text-muted" style="padding: 10px;"><?php echo SITE_TITLE; ?></h3>
        <nav>
            <ul class="nav nav-pills pull-right">
                <li role="presentation" style="padding: 10px;"><a href="index.php">Home</a></li>
                <br>
                <li role="presentation" style="padding: 10px;"><a href="create.php">Create Quest</a></li>
                <br>
                <li role="presentation" style="padding: 10px;"><a href="new-user.php">Sign Up</a></li>
                <br>
                <li role="presentation" style="padding: 10px;" class="active"><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </div>
    <?php if(isset($_SESSION['message']))  displayMessage() ; ?>

    <h1>Login</h1>
<form method="POST">
  <div class="form-group row">
    <label for="user_email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="user_email" value="email@example.com">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="user_password" placeholder="Password">
    </div>
  </div>
  <input type="submit" value="Login" name="submit" class="btn btn-primary"/>
</form>

<small>Need to make an account? 
<br> 
<a href="new-user.php">Sign Up</a> here!</small>


    <footer class="footer">
<p>&copy; Chance Croft 2020</p>
</footer>

</div>
    </body>
</html>

