<?php include_once "dbConnection.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php include "navigation.php" ?><hr>
    <h3>This is Home Page!</h3>
</body>
</html>
<?php 
    mysqli_close($dbConnection);
?>