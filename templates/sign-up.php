<?php include '../inc/header.php'; ?>

<h1>Sign Up Form</h1>
<form method="POST" action="new-user.php" style="border:1px solid #ccc">
  <div class="container">
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="xXLegolasXx" name="username" required class="form-control">
    <br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Password" name="pword" required class="form-control">
    <br>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <input type="submit" name="submit" value="Submit" style="margin: 10px;"/>
  </div>
</form>



<?php include '../inc/footer.php'; ?>