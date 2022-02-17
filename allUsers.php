<?php
include_once "dbConnection.php";

$selectUsers = "SELECT `username`,`email` FROM `users`";
$query = mysqli_query($dbConnection, $selectUsers);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
</head>
<body>
    <?php include "navigation.php" ?><hr>
    <h4>User Info</h4>
    <table>
        <thead>
            <th>User Name</th>
            <th>Email</th>
        </thead>
        <tbody>
            <?php while($user = mysqli_fetch_assoc($query)) { ?>
                <tr>
                <td><?php echo $user['username'];?></td>
                <td><?php echo $user['email'];?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
<?php 
    mysqli_close($dbConnection);
?>