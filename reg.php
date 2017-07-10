

<?php

session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli("localhost", "root", "", "popcorntv");

//the form has been submitted with post
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    
    //two passwords are equal to each other
    if ($_POST['password'] == $_POST['confirmpassword']) 
    {
        
        //set all the post variables
        $username = $_POST['user'];
        $email = $_POST['email'];
        $password = md5($_POST['password']); //md5 has password for security
        //$avatar_path = 'images/'.$_FILES['avatar']['name'];
        
        //make sure the file type is image
        //if (preg_match("!image!",$_FILES['avatar']['type'])) {
            
            //copy image to images/ folder 
            //if (copy($_FILES['avatar']['tmp_name'], $avatar_path)){
                
                //set session variables
                $_SESSION['username'] = $username;
                $_SESSION['avatar'] = $avatar_path;

                //insert user data into database
                $sql = "INSERT INTO login (username, email ,password) "
                        . "VALUES ('$username', '$email', '$password')";
                
                //if the query is successsful, redirect to welcome.php page, done!
                if ($mysqli->query($sql) === true){
                    $_SESSION['message'] = "Registration succesful! Added $username to the database!";
                    header("location: welcome.php");
                }
                else {
                    $_SESSION['message'] = 'User could not be added to the database!';
                }
                $mysqli->close(); 
    }
    else {
        $_SESSION['message'] = 'Two passwords do not match!';
    }
}

?>







