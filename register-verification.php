<?php
    session_start();

    include_once("config.php");

    if (count($_POST) && isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["confirmed"]))
    {
      $username = $_POST["username"];
      $password = $_POST["password"];
      $confirmed = $_POST["confirmed"];

      if ($username == ""){
        $_SESSION["message"] .= " Username must be entered.";
      }

      if ($password == ""){
        $_SESSION["message"] .= " Password must be entered.";
      }

      if ($confirmed == ""){
        $_SESSION["message"] .= " Confirm Password must be entered.";
      }

      if ($_SESSION["message"] == ""){
        $userLength = strlen($username);
        $passLength = strlen($password);

        if ($userLength > 11){
            $_SESSION["message"] .= " Username must be less than 12 characters (currently $userLength).";
        }

        if ($passLength > 45){
            $_SESSION["message"] .= " Password must be less than 46 characters (currently $passLength).";
        }

        if ($_SESSION["message"] == ""){
            $result = $pdo->query("SELECT * FROM User WHERE UserID = '$username'");
            $success = $result->fetch(PDO::FETCH_ASSOC);
            if($success == null)
            {
                if ($password == $confirmed){
                    $pdo->query("INSERT INTO `user` (`UserID`, `Password`) VALUES ('$username', '$password');");
                    header("Location: login-page.php");
                }
                else {
                    $_SESSION["message"] = " Passwords do not match. Re-submit with matching passwords.";
                    header("Location: register-page.php");
                }
            }
            else
            {
                $_SESSION["message"] = "That username is already taken. Re-submit using a different username.";
                header("Location: register-page.php");
            }
        }
        else{
            header("Location: register-page.php");
        }
      }
      else{
        header("Location: register-page.php");
      }
    }

?>