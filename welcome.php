<link rel="stylesheet" href="css/style.css">

<?php session_start(); ?>

<div class="body content">
    <div class="welcome">
        <div class="alert alert-success"><?= $_SESSION['message'] ?></div>
        Welcome <span class="user"><?= $_SESSION['username'] ?></span>

        <?php
        $mysqli = new mysqli("localhost", "root", "", "popcorntv");
        //Select queries return a resultset
        $sql = "SELECT username, avatar FROM login";
        $result = $mysqli->query($sql); //$result = mysqli_result object
        //var_dump($result);
        ?>

    </div>
    <div id = "profile">
    <form id = "profile_go" method = "POST" action = "<?= header("location: profile.php?USERNAME=".$_SESSION['username']); ?>">
        <input type="submit" name="profile" value = "Go To Your Profile Page ->">
    </form>
</div>