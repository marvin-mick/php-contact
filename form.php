<?php
    $name = $email = $text = "";
    $isSuccess = false;
    $emailTo = "YOURMAIL";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      $name = verifyInput($_POST["name"]);
      $email = verifyInput($_POST["email"]);
      $text = verifyInput($_POST["text"]);
      $isSuccess = true;
      $emailText = "";

      if (empty($name)){
        $isSuccess = false;
      }
      else {
        $emailText .= "Nom : $name\n";
      }

      if (!isEmail($email)){
        $isSuccess = false;
      }
      else {
        $emailText .= "Email : $email\n";
      }

      if (empty($text)){
        $isSuccess = false;
      }
      else {
        $emailText .= "Texte : $text\n";
      }

      if ($isSuccess){
        $headers = "From : $name <$email>\r\n Reply-To : $email";
        mail($emailTo, "Un nouveau message", $emailText, $headers);
        $name = $email = $text = "";
      }
    }

    function isEmail($var){
      return filter_var($var, FILTER_VALIDATE_EMAIL);
    }

    function verifyInput($var){
      $var = trim($var);
      $var = stripslashes($var);
      $var = htmlspecialchars($var);
      return $var;
    }
?>
