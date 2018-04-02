<?php // Example 26-7: singin.php
//echo "<div class='main'><h3>Please enter your details to log in</h3>";
session_start();
require_once 'dbconfig.php';
/*$error = $user = $pass = "";

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

            header("Location: index.php");
            //echo showErrorMessage('Неверный пароль!');
        }
        else
        {
            $_SESSION['user'] = $user;
            $_SESSION['pass'] = $pass;

            header("Location: dashboard.php");
            die();
        }
    }
}*/

if(isset($_POST['btn-login']))
{
    //$user_name = $_POST['user_name'];
    $user_email = trim($_POST['user']);
    $user_password = trim($_POST['pass']);

    /*$password = md5($user_password);*/
    $password = $user_password;

    try
    {

        $stmt = $db_con->prepare("SELECT * FROM members WHERE user=:email");
        $stmt->execute(array(":email"=>$user_email));
        $row = $stmt->fetch(PDO::FETCH_BOTH);
        $count = $stmt->rowCount();

        if($row['pass']==$password){

            echo "ok"; // log in
            $_SESSION['user_session'] = $row['user_id'];
        }
        else{

            echo "email or password does not exist."; // wrong details
        }

    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}

?>
