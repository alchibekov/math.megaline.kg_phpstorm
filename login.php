<?php // Example 26-7: login.php
//echo "<div class='main'><h3>Please enter your details to log in</h3>";
require_once 'header.php';
$error = $user = $pass = "";

if (isset($_POST['user']))
{
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);

    if ($user == "" || $pass == "")
        $error = "Not all fields were entered<br>";
    else
    {
        $result = queryMySQL("SELECT user,pass FROM members
        WHERE user='$user' AND pass='$pass'");

        if ($result->num_rows == 0)
        {
            /*$error = "<span class='error'>Username/Password
                  invalid</span><br><br>";*/
            header("Location: index.php");
            //echo showErrorMessage('Неверный пароль!');
        }
        else
        {
            $_SESSION['user'] = $user;
            $_SESSION['pass'] = $pass;
            /*You are now logged in. Please <a href='dashboard.php'>" .
                "click here</a> to continue.<br><br>*/
            header("Location: dashboard.php");
            die();
        }
    }
}

/*echo <<<_END
<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
 <div class="pop-up">
        <div id="small-dialog" class="mfp-hide book-form">
            <h3>Sign In </h3>
            <form action="login.php" method="post">

                <input type="text" name="user" class="email" placeholder="Email" required="" />
                <input type="password" name="pass" class="password" placeholder="Password" required=""/>
                <ul>
                    <li>
                        <input type="checkbox" id="brand1" value="">
                        <label for="brand1"><span></span>Remember me</label>
                    </li>
                </ul>
                <a href="#">Forgot Password?</a><br>
                <div class="clearfix"></div>
                <input type="submit" value="Sign In">
            </form>

        </div>
    </div>
_END;*/
/*echo <<<_END
    <form method='post' action='login.php'>$error
    <span class='fieldname'>Username</span><input type='text'
      maxlength='16' name='user' value='$user'><br>
    <span class='fieldname'>Password</span><input type='password'
      maxlength='16' name='pass' value='$pass'>


    <br>
    <span class='fieldname'>&nbsp;</span>
    <input type='submit' value='Login'>
    </form><br></div>
  </body>
</html>
_END;*/
