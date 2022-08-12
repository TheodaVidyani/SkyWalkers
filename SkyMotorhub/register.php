<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style/register.css">
</head>

<body>
  <div class="container">
    <form class="animate" action="verifyUser.php" method="post">
      <h1>Register</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email">User Name</label>
      <input type="text" id="username" placeholder="Enter User Name" name="username" title="Please Enter the User Name"
        required>

      <label for="psw">Password</label>
      <input type="password" id="psw" placeholder="Enter Password" name="password"
        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
        required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" id="psw-repeat" placeholder="Repeat Password" name="psw-repeat"
        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must equal to the Password " required>


      <div class="container signin">
        <p>Already have an account? <a href="login.php">Sign in</a>.</p>
      </div>
      <div class="clearfix">
        <button type="button" class="cancelbtn" name="submit">Cancel</button>
        <button type="submit" class="registerbtn" name="submit">Register</button>
      </div>
  </div>
  </form>
  </div>

  <div id="message">
    <h3>Password must contain the following:</h3>
    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
    <p id="number" class="invalid">A <b>number</b></p>
    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
  </div>

  <script type="text/javascript" src="source/js/register.js"></script>

</body>

</html>