<?php
session_start();

if(isset($_SESSION['username'])){
    header("location:admin_add_teacher.php");
}
else if($_SESSION['usertype']=="student"){
    header("location:login.php");
}

$conn = new mysqli("localhost","root","","studentmanagement");

if(isset($_POST['add_teacher'])){
    $t_name = $_POST['name'];
    $t_desc = $_POST['description'];
    $file = $_FILES['image']['name'];

    $dst = "./image/".$file;
    $dst_db = "image/".$file;

    move_uploaded_file($_FILES['image']['tmp_name'],$dst);

    $sql = "INSERT INTO teacher(name,description,image) VALUES('$t_name','$t_desc','$dst_db')";
    $result = mysqli_query($conn,$sql);

    if($result){
        header("location: admin_add_teacher.php");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>

    <style>
        .form_deg{
            background-color: skyblue;
            padding: 30px;
            margin: auto;
            width: 50%;
        }
    </style>
</head>

<body>

<div class="form_deg">

    <form action="#" method="POST" enctype="multipart/form-data">

        <div>
            <label>Teacher Name</label>
            <input type="text" name="name" required>
        </div>

        <div>
            <label>Teacher Description</label>
            <textarea name="description" required></textarea>
        </div>

        <div>
            <label>Teacher Image</label>
            <input type="file" name="image" required>
        </div>

        <div>
            <input type="submit" name="add_teacher" value="Add Teacher">
        </div>

    </form>

</div>

</body>
</html>