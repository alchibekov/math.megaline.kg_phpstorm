<?php // Example 26-7: login.php
  /*require_once 'header.php';
  echo "<div class='main'><h3>Please enter your details to log in</h3>";*/
  $error = $user = $pass = "";

echo <<<_END
<div class="pop-up">
	<div id="small-dialog2" class="mfp-hide book-form">
		<h3>Регистрация</h3>
			<form action="#" method="post">
				<input type="text" name="Name" placeholder="Ваше имя" required=""/>
				<input type="text" name="Email" class="email" placeholder="Email" required=""/>
				<input type="password" name="Password" class="password" placeholder="Будущий пароль от учетной записи math.megaline.kg" required=""/>
				<input type="password" name="Password" class="password" placeholder="Подтвердить пароль" required=""/>
				<input type="submit" value="Сохранить данные и зарегистрироваться">
			</form>
	</div>
</div>
_END;

  if (isset($_POST['user']))
  {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);
    
    if ($user == "" || $pass == "")
        $error = "Not all fields were entered<br>";
    else
    {
      $result = queryMySQL("SELECT user,pass FROM login.php
        WHERE user='$user' AND pass='$pass'");

      if ($result->num_rows == 0)
      {
        $error = "<span class='error'>Username/Password
                  invalid</span><br><br>";
      }
      else
      {
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        die("You are now logged in. Please <a href='members.php?view=$user'>" .
            "click here</a> to continue.<br><br>");
      }
    }
  }

  echo <<<_END
    <form method='post' action='login.php'>$error
    <span class='fieldname'>Username</span><input type='text'
      maxlength='16' name='user' value='$user'><br>
    <span class='fieldname'>Password</span><input type='password'
      maxlength='16' name='pass' value='$pass'>
_END;
?>

    <br>
    <span class='fieldname'>&nbsp;</span>
    <input type='submit' value='Login'>
    </form><br></div>
  </body>
</html>
