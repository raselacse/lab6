<?php 
include "dbConnection.php";
unset($_SESSION['userInfo']);

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["submit"])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $selectQuery = "SELECT `username`, `email`, `password` FROM `users` WHERE `email`= '$email' AND `password` = '$password'";

        $query = mysqli_query($dbConnection, $selectQuery);
        
        if(mysqli_num_rows($query)) {
            $_SESSION['userInfo'] = mysqli_fetch_assoc($query);
            header('Location: profile.php');
        } else {
            $_SESSION['login_err'] = "Something went wrong. Please try again!";;
        }
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<body>
    <?php include("navigation.php");?>
    <!-- <?php echo isset($_SESSION['login_success']) ? $_SESSION['login_success'] : null;?> -->
    <?php echo isset($_SESSION['login_err']) ? $_SESSION['login_err'] : null;?>
    <div>
        <h3>Sign In Form</h3>
        <form action="" method="post">
            <div>
                <label for="email">Email</label></br>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="password">Password</label></br>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <input type="checkbox" name="checkbox" id="checkbox">
                <label for="checkbox">Remember Me!</label>
            </div>
            <input type="submit" value="Sign In" name="submit" style="margin-top: 21px;">
        </form>
    </div>
</body>
</html>

<?php 
    mysqli_close($dbConnection);
    unset($_SESSION['login_err']);
?>
