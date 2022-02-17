<?php 
include "dbConnection.php";
unset($_SESSION['userInfo']);

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["submit"])){
        $email = $_POST['email'];
        $userName = $_POST['username'];
        $password = $_POST['password'];

        $insertQuery = "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$userName','$email','$password')";

        $query = mysqli_query($dbConnection, $insertQuery);
        if($query) {
            $_SESSION['success_msg'] = "Registration Successful";
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
    <title>Sign Up</title>
</head>
<body>
    <?php include "navigation.php" ?>
    <?php echo isset($_SESSION['success_msg']) ? $_SESSION['success_msg'] : null;?>
    <div>
        <h3>Sign Up Form</h3>
        <form action="" method="post">
            <div>
                <label for="email">Email</label></br>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="username">User name</label></br>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="password">Password</label></br>
                <input type="password" name="password" id="password">
            </div>
            <input type="submit" value="Submit" name="submit" style="margin-top: 21px;">
        </form>
    </div>
</body>
</html>

<?php 
    mysqli_close($dbConnection);
    unset($_SESSION['success_msg']);
?>
