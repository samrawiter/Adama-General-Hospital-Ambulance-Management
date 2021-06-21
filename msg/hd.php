<?php 
  session_start();

  
  require_once 'functions.php';

  $usenamerstr = ' (Guest)';

  if (isset($_SESSION['username']))
  {
    $user     = $_SESSION['username'];
    $loggedin = TRUE;
    $usernamestr  = " ($username)";
  }
  else $loggedin = FALSE;

  echo "<link rel='stylesheet' " .
       "href='styless.css' type='text/css'>"                     .
       "</head><body><center><canvas id='logo' width='624' "    .
       "height='96'>$appname</canvas></center>"             .
       "<div class='appname'>$appname$usernammestr</div>"            .
       "<script src='javascript.js'></script>";

  if ($loggedin)
  {
    echo "<br ><ul class='menu'>" .
         "<li><a href='friends.php'>Friends</a></li>"         .
         "<li><a href='messages.php'>Messages</a></li>"       .
         "<li><a href='logout.php'>Log out</a></li></ul><br>";
  }
  else
  {
    echo ("<br><ul class='menu'>" .
         "<li><a href='login.php'>Log in</a></li></ul><br>"     
          );
  }
?>
