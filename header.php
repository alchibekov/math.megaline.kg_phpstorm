<?php // Example 26-2: header.php
  session_start();

    echo <<<_END
        <!DOCTYPE html>
        <html>
        <head>
_END;

    require_once 'functions.php';

    $userstr = ' (Guest)';

  if (isset($_SESSION['user']))
  {
    $user     = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr  = " ($user)";
  }
  else $loggedin = FALSE;

  /*echo "<title>$appname$userstr</title><link rel='stylesheet' " .
       "href='styles.css' type='text/css'>"                     .
       "</head><body><center><canvas id='logo' width='624' "    .
       "height='96'>$appname</canvas></center>"             .
       "<div class='appname'>$appname$userstr</div>"            .
       "<script src='javascript.js'></script>";
*/
  if ($loggedin)
  {
      header('Location: dashboard.php');
  }
  else
  {
      //header('Location: index.php');
  }
?>
