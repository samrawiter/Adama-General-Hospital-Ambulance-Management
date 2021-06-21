<?php 

  require_once 'header.php';
  
  $error = $username = $password = "";

  if (isset($_POST['username']))
  {
    $username = sanitizeString($_POST['username']);
    $password = sanitizeString($_POST['password']);
    
    if ($username == "" || $password == "")
        $error = "your are not the member<br>";
    else
    {
      $result = queryMySQL("SELECT username,password FROM employees
        WHERE username='$username' AND password='$password'");

      if ($result->num_rows == 0)
      {
        $error = "<span class='error'>Username/Password
                  invalid</span>";
      }
      else
      {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        die("You are now logged in. Please <a href='members.php?view=$username'>" .
            "click here</a> to continue.");
      }
    }
  }

  echo <<<_END
    <form method='post' action='logiin.php'>$error
    <span class='fieldname'>Username</span><input type='text'
      maxlength='16' name='username' value='$username'><br>
    <span class='fieldname'>Password</span><input type='password'
      maxlength='16' name='password' value='$password'>
_END;
?>

    <br>
    <span class='fieldname'>&nbsp;</span>
    <input type='submit' value='Logiin'>
    </form><br></div>
  </body>
</html>
