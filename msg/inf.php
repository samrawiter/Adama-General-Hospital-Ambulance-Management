<?php // Example 26-4: indd.php
  require_once 'header.php';

  echo "<br><span class='main'> ";

  if ($loggedin);
 
?>

    </span><br><br>
  </body>
</html>















<?php 
  require_once 'header.php';
  if (!$loggedin) die();

  if (isset($_GET['view'])) $view = sanitizeString($_GET['view']);
  else                      $view = $username;

  if (isset($_POST['text']))
  {
    $text = sanitizeString($_POST['text']);

    if ($text != "")
    {
     $time = time();
      queryMysql("INSERT INTO messages VALUES(NULL, '$username',
        '$view', $time, '$text')");
    }
  }

  if ($view != "")
  {
    if ($view == $username) $name1 = $name2 = "Your";
    else
    {
      $name1 = "<a href='members.php?view=$view'>$view</a>'s";
      $name2 = "$view's";
    }

    echo "<div class='main'><h3>$name1 Messages</h3>";
    
    
    echo <<<_END
      <form method='post' action='messagess.php?view=$view'>
      Type here to leave a message:<br>
      <textarea name='text' cols='40' rows='3'></textarea><br>
      <input type='submit' value='Post Message'></form><br>
_END;

    if (isset($_GET['erase']))
    {
      $erase = sanitizeString($_GET['erase']);
      queryMysql("DELETE FROM messages WHERE message_id=$erase AND recip='$username'");
    }
    
    $query  = "SELECT * FROM messages WHERE recip='$view' ORDER BY time DESC";
    $result = queryMysql($query);
    $num    = $result->num_rows;
    
    for ($j = 0 ; $j < $num ; ++$j)
    {
      $row = $result->fetch_array(MYSQLI_ASSOC);

      if ( $row['auth'] == $username || $row['recip'] == $username)
      {
        echo date('M jS \'y g:ia:', $row['time']);
        echo " <a href='messagess.php?view=" . $row['auth'] . "'>" . $row['auth']. "</a> ";

        
          echo "whispered: <span class='whisper'>&quot;" .
            $row['message']. "&quot;</span> ";

        if ($row['recip'] == $username)
          echo "[<a href='messagess.php?view=$view" .
               "&erase=" . $row['id'] . "'>erase</a>]";

        echo "<br>";
      }
    }
  }

  if (!$num) echo "<br><span class='info'>No messages yet</span><br><br>";

  echo "<br><a class='button' href='messagess.php?view=$view'>Refresh messagess</a>";
?>

    </div><br>
  













<div id="sample">
      <footer>
      <br>
      <div align="right">
</div>
        <p align="center"><font face="Times New Roman" color="white" size="2">Copyright &copy Adama general hospital .</font></p>
        <br><br>
    

      </footer>
</div>

</body>
</html>

