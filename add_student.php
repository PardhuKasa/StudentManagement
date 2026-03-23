<?php
session_start();

if(!isset($_SESSION['username'])){
    header('location:login.php');
}
elseif ($_SESSION['usertype']=='student') {
    header('location:login.php');
}

$host="localhost";
$user="root";
$password="";
$db="studentmanagement";
$data=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['add_student'])){

    $username = trim($_POST['name']);
    $user_phone = trim($_POST['phone']);
    $user_email = trim($_POST['email']);
    $user_password = trim($_POST['password']);
    $usertype = "student";

    if(empty($username) || empty($user_phone) || empty($user_email) || empty($user_password)){
        echo "<script>
                alert('All fields are required!');
              </script>";
    }
    else{

        $check="SELECT * FROM user WHERE username='$username'";
        $check_user=mysqli_query($data,$check);
        $row_count=mysqli_num_rows($check_user);

        if($row_count==1){
            echo "<script>
                    alert('Username already exists');
                  </script>";
        }
        else{
            $sql="INSERT INTO user(username,phone,email,usertype,password)
                  VALUES ('$username','$user_phone','$user_email','$usertype','$user_password')";
            
            $result=mysqli_query($data,$sql);

            if($result){
                echo "<script>
                        alert('Data uploaded successfully');
                      </script>";
            }
            else{
                echo "<script>
                        alert('Data upload unsuccessful');
                      </script>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <?php
        include('admin_css.php');
    ?>
    <style>
        label{
            display:inline-block;
            text-align:right;
            width:100px;
            padding-top:15px;
            padding-bottom:15px;
        }
        div label{
            color:white;
        }
        .div_deg{
            background:#1e3a8a;
            
            width: 400px;
            padding-top:20px;
            padding-bottom:20px;
        }
        .button{
            margin-top:30px;
        }
        .addstudent{
            background: #3b82f6;
            color: white;
        }
    </style>
</head>
<body>
    <?php
        include('admin_sidebar.php');
    ?>
    <div class="content">
        <center>
            <h1>Add Student</h1><br>
            <div class="div_deg">
                <form action="#" method="post">
                    <div>
                        <label>Username:</label>
                        <input type="text" name="name">
                    </div>
                    <div>
                        <label>Phone:</label>
                        <input type="text" name="phone">
                    </div>
                    <div>
                        <label>Email:</label>
                        <input type="text" name="email">
                    </div>
                    <div>
                        <label>Password:</label>
                        <input type="text" name="password">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-success button" name="add_student" value="Add Student">
                    </div>
                </form>
            </div>
        </center>
    </div>
</body>
</html>