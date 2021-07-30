<?php


$connect=mysqli_connect('localhost','root',"",'userregisteration') or die('connection error!');

if(isset($_POST['registerbtn'])){

    $username = $_POST['username'];
    $mobile =$_POST['mobile'];
    $password = $_POST['password'];

    $insert= mysqli_query($connect,"INSERT INTO student_db VALUES('$username',' $mobile','$password')");
   
    if($insert){
        echo '<script> alert("Registration Successfully!");
        window.location = "./login.php";
        </script>';
        
    }
    else{
        echo  '<script> alert("Registration Failed!") </script>';
    }

}
if(isset($_POST['loginbtn'])){
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $check = mysqli_query($connect, "SELECT username FROM student_db WHERE mobile ='$mobile'AND password='$password' ");
    if(mysqli_num_rows($check)>0){
        $fetch = mysqli_fetch_array($check);
        $username = $fetch['username'];
        $_SESSION['username']= $username;
        header("location:homepage.php");
        

    }
    else{
        echo  '<script> alert("Login Failed!") </script>';
    }

}
if(isset($_POST['logoutbtn']))
{
    session_destroy();
    header("location:login.php");
}

?>