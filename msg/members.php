<?php // Example 26-9: members.php
  require_once 'header.php';

  if (!$loggedin) die();

  echo "<div class='main'>";

  if (isset($_GET['view']))
  {
    $view = sanitizeString($_GET['view']);
    
    if ($view == $username) $name = "Your";
    else                $name = "$view's";
    
    echo "<a class='button' href='messages.php?view=$view'>" .
         "View $name messages</a><br><br>";
    die("</div></body></html>");
  }

  if (isset($_GET['add']))
  {
    $add = sanitizeString($_GET['add']);

    $result = queryMysql("SELECT * FROM employees WHERE username='$add' AND friend='$username'");
    if (!$result->num_rows)
      queryMysql("INSERT INTO employeess VALUES ('$add', '$username')");
  }
  elseif (isset($_GET['remove']))
  {
    $remove = sanitizeString($_GET['remove']);
    queryMysql("DELETE FROM employees WHERE username='$remove' AND friend='$username'");
  }

  $result = queryMysql("SELECT username FROM employees ORDER BY username");
  $num    = $result->num_rows;

  
  for ($j = 0 ; $j < $num ; ++$j)
  {
    $row = $result->fetch_array(MYSQLI_ASSOC);
    if ($row['username'] == $username) continue;
    
    echo "<li><a href='members.php?view=" .
      $row['username'] . "'>" . $row['username'] . "</a>";
    $follow = "follow";

    $result1 = queryMysql("SELECT * FROM employees WHERE
      username='" . $row['username'] . "' AND friend='$username'");
    $t1      = $result1->num_rows;
    $result1 = queryMysql("SELECT * FROM employees WHERE
      username='$username' AND friend='" . $row['username'] . "'");
    $t2      = $result1->num_rows;

    if (($t1 + $t2) > 1) echo " &harr; is a your friend";
    
    else      echo " [<a href='members.php?remove=".$row['username'] . "'>drop</a>]";
  }
?>

    </ul></div>
  </body>
</html>
