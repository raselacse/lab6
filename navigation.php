<section>
    <img style="height: 100px" src="logo.jpg" alt="logo" srcset="">
    <nav>
        <ul>
            <?php if(isset($_SESSION['userInfo'])) { ?>
                <li style="list-style-type: none;">
                    <a style="text-decoration: none;" href="profile.php">Profile</a>
                </li>
                <li style="list-style-type: none;">
                    <a style="text-decoration: none;" href="allUsers.php">All Users</a>
                </li>
                <li style="list-style-type: none;">
                    <a style="text-decoration: none;" href="signIn.php">Sign Out</a>
                </li>
            <?php } else { ?>
                <li style="list-style-type: none;">
                    <a style="text-decoration: none;" href="index.php">Home</a>
                </li>
                <li style="list-style-type: none;">
                    <a style="text-decoration: none;" href="signUp.php">Sign Up</a>
                </li>
                <li style="list-style-type: none;">
                    <a style="text-decoration: none;" href="signIn.php">Sign In</a>
                </li>
            <?php } ?>
        </ul>
    </nav>
</section>