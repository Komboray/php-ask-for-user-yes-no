<?php
// this is the php page that asks for the user response from a form
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yes/No Alert</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <br>
        <label for="name">Previous Email Entered</label>
        <input type="email" name="email-compared" id="email-compared" required>
        <br>
        <label for="name">Name</label>
        <input type="text" name="name-new" id="name" required>
        <br>
        <label for="email">Email</label>
        <input type="email" name="email-new" id="email" required>
        <br>
        <input type="submit" name = "Send-update" value="Send-update">
        
    </form>
    <?php
    if(isset($_POST["Send-update"])){

        $_SESSION["email-compared"] = $_POST["email-compared"];
        $_SESSION["name-new"] = $_POST["name-new"];
        $_SESSION["email-new"] = $_POST["email-new"];
        header("Location:enquire.php");
    }
        
        

    ?>


</body>
</html>
