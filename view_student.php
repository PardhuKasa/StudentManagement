<?php
    error_reporting(0);
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
    $sql="select * from user where usertype='student'";
    $result=mysqli_query($data,$sql);
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
        table,th,tr,td{
            border:1px solid black;
        }
        th,td{
            padding:20px;
            font-size:18px;
        }
    </style>
</head>
<body>
    <?php
        include('admin_sidebar.php');
    ?>
    <div class="content">
        <center>
            <h1>Student Data</h1><br><br>
            <?php
                if($_SESSION['message'])
                {
                    echo $_SESSION['message'];
                }
                unset($_SESSION['message']);
            ?>
            <table>
                <tr>
                    <th>UserName</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
                <?php
                    while ($info=$result->fetch_assoc()){
                        
                    
                ?>
                    <tr>
                        <td>
                            <?php
                                echo "{$info['username']}";
                            ?>
                        </td>
                        <td>
                            <?php
                                echo "{$info['phone']}";
                            ?>
                        </td>
                        <td>
                            <?php
                                echo "{$info['email']}";
                            ?>
                        </td>
                        <td>
                            <?php
                                echo "{$info['password']}";
                            ?>
                        </td>
                        <td>
		 	    	        <?php
                                echo "<a onclick=\"javascript:return confirm('Are your Sure to Delete this');\"
                            class='btn btn-danger' href='delete.php?student_id={$info['id']}'>Delete</a>";
                            ?>
		 	            </td>
                        <td class="table_td">
                            <?php echo "<a  class='btn btn-primary'
                            href='update_student.php?student_id={$info['id']}'> Update </a>";
                            ?>
		 	            </td>
                    </tr>
                <?php
                    }
                ?>
                
            </table>
        </center>

    </div>
</body>
</html>