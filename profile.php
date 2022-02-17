<?php
    include_once "dbConnection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <?php include("navigation.php");?>
    <?php echo isset($_SESSION['login_success']) ? $_SESSION['login_success'] : null;?>
    <div>
        <h2>My Profile</h2>
        <?php 
            $user = $_SESSION['userInfo']; 
        ?>
        <h4>Username: <?php echo isset($user['username']) ? $user['username'] : null ?></h4>
        <h4>Password: <?php echo isset($user['password']) ? $user['password'] : null ?></h4>
        <h4>Email: <?php echo isset($user['email']) ? $user['email'] : null ?></h4>
    </div>
    
</body>
</html>
<?php 
    mysqli_close($dbConnection);
    unset($_SESSION['login_success']);
?>