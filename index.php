<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
</head>
<body>
    <nav>
        <label class="logo">RGUKT-CSE</label>
        
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#faculty">Faculty</a></li>
            <li><a href="#courses">Courses</a></li>
            <li><a href="#admission">Admission</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav>
    <div class="section1">
        <label class="img_text">Teaching is our Hobby</label>
        <img src="1.avif" alt="" class="main_img">

    </div>
    <div class="container" id="about">
        <div class="row">
            <div class="col-md-4">
                <img src="3.webp" alt="" class="welcome_img">
            </div>
            <div class="col-md-8">
                <h1>Welcome to  RGUKT</h1>
                <p>To provide quality technical education with the goal of 
                    inclusiveness in terms of access to the meritorious rural
                    youth, who are perennially deprived of the opportunities;
                    through an innovative blend of modern computer assisted,
                    learner-centric instructional methodology along with
                    rigorous traditional teaching in a world class ambience.
                    The program offered by the RGUKT consists of a six year
                    integrated course after 10th class examination leading to
                    a B.Tech. degree. The first part of the six-year course is
                    a two-year Pre University Course (equivalent to (AP)
                    Intermediate) followed by a second part of four-year
                    Engineering Course. At present the pre-university part of
                    education offers premature specialization in tracks such as
                    Mathematics, Physics, Chemistry and Life sciences (equivalent
                    to MPC + BiPC). By bringing students in to the University at 
                    an earlier stage we hope to impart a broad based education 
                    including humanities and liberal arts to students.
                </p>
            </div>
        </div>
    </div>
    <center>
        <h1 id="faculty">Our Faculty</h1>
    </center>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img class="teacher" src="t1.jpg">
                <p>Name:Ms.Mathe Jerusha Blessy
                Designation:Assistant Professor(C)</p>
            </div>
            <div class="col-md-3">
                <img class="teacher" src="t2.jpg">
                <p>Name:Mr. Gummadidala Jaya Krishna
                    Designation:Assistant Professor(C)</p>
            </div>
            <div class="col-md-3">
                <img class="teacher" src="t3.jpg">
                <p>Name:Dr. D.V.Nagarjana Devi
                Designation:Assistant Professor</p>
            </div>
            <div class="col-md-3">
                <img class="teacher" src="t4.jpg">
                <p>Name:Mr. A.Udaya Kumar
                Designation:Assistant Professor</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img class="teacher" src="t5.jpg">
                <p>Name:Dr. S.Chiranjeevi
                Designation:Assistant Professor</p>
            </div>
            <div class="col-md-3">
                <img class="teacher" src="t6.jpg">
                <p>Name:Mr. Nalliboyina Ramakrishna
                Designation:Assistant Professor(C)</p>
            </div>
            <div class="col-md-3">
                <img class="teacher" src="t7.jpg">
                <p>Name:Mr. Kumar Anurupam
                Designation:Assistant Professor(C)</p>
            </div>
            <div class="col-md-3">
                <img class="teacher" src="t8.jpg">
                <p>Name:Mr. K.Lakshmi Kanth
                Designation:Assistant Professor (C)</p>
            </div>
        </div>
    </div>
    <center>
        <h1 id="courses">Our Courses</h1>
    </center>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img class="course" src="c1.png">
                <h4>Web Technologies</h4>
            </div>
            <div class="col-md-3">
                <img class="course" src="c2.png">
                <h4>Compiler Design</h4>
            </div>
            <div class="col-md-3">
                <img class="course" src="c3.jpg">
                <h4>Graphic Designing</h4>
            </div>
            <div class="col-md-3">
                <img class="course" src="c4.jpg">
                <h4>Computer Networks</h4>
            </div>
        </div>
    </div>
    <div class="form_section" id="admission">
        <div class="container_form">
            <div class="header">
                <h2>Admission Form</h2>
            </div>
            <form action="submit.php" method="POST" class="form" id="form">
                <div class="field">
                    <label >ID No</label>
                    <input type="text" placeholder="Enter Your ID" id="idno" name="idno">
                    <span class="material-icons success"> check_circle</span>
                    <span class="material-icons error ">error</span>
                    <small>Error message</small>
                </div>
                <div class="field">
                    <label >Name</label>
                    <input type="text" placeholder="Enter your name" id="uname" name="uname">
                    <span class="material-icons success"> check_circle</span>
                    <span class="material-icons error ">error</span>
                    <small>Error message</small>
                </div>
                <div class="field">
                    <label >Mobile No</label>
                    <input type="text" placeholder="+91 XXXXXXXXXX" id="mobile" name="mobile">
                    <span class="material-icons success"> check_circle</span>
                    <span class="material-icons error ">error</span>
                    <small>Error message</small>
                </div>
                <div class="field">
                    <label>Email</label>
                    <input type="email" placeholder="abc@gmail.com" id="email" name="email">
                    <span class="material-icons success "> check_circle</span>
                    <span class="material-icons error">error</span>
                    <small>Error message</small>
                </div>
                <div class="field">
                    <input type="checkbox" id="tc" class="terms" >
                    <label>I agree to terms and conditions</label>               
                    <small>Error message</small>
                </div>
                <input type="submit" class="button">
            </form>
        </div>
    </div>
    <div class="footer" id="contact">
        <div class="address">
            RGUKT NUZVID,<br>
            Eluru(dist),<br>
            521201,<br>
            AndhraPradesh.
        </div>
        <div class="contact-details">
            <p>Pardhukasa2@gmail.com</p>
            <p>+91 8790174508</p>
            <p>rushiroyals@gmail.com</p>
            <p>+91 9182011545</p>
        </div>
        <div class="contact-details">  
            <p>pattemDhanushya@gmail.com</p>
            <p>+91 9908971138</p>
            <p>Valli@gmail.com</p>
            <p>+91 8790174508</p>
        </div>
    </div>
<script src="script.js"></script>
</body>
</html>