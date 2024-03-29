<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="top">
        <nav>
            <hgroup>
                <h1 class="title">Leonard Lungu</h1>
            </hgroup>
            <ul>
                <li class="aboutmenav"><a href="index.php">About Me</a></li>
                <li class="experience"><a href="experience.php">Experience</a></li>
                <li class="skillsnav"><a href="skills.php">Skills</a></li>
                <li class="education"><a href="education.php">Education</a></li>
                <li class="projects"><a href="projects.php">Projects</a></li>
                <li class="blog"><a href="viewBlog.php">Blog</a></li>
                <div class="login-right">
                    <?php
                    session_start();
                    if (isset($_SESSION['email'])) {
                        ?>
                        <li class="logout"><a href="logout.php">Logout</a></li>
                        <?php
                    } else {
                        ?>
                        <li class="login"><a href="login.html">Login</a></li>
                    <?php } ?>
                </div>    
            </ul>
        </nav>
    </header>
    <div class="parallax1 asidemain">
        <fieldset class="fieldaround">
            <legend>2021-Current</legend>
            <img id="me" src="images/qmul.png" alt="me!">
            <h1 style="color: white">Queen Mary, University of London</h1> 
            <p>Experience in Procedural Programming and Object Oriented Programming in Java, as well as HTML and CSS.</p>
            <p>Coursework grades for Semester A: Computer Systems and Networks (95%), Logic and Discrete Structures (84%), Professional and Research Practice (95%), Procedural Programming (76%).</p>
            <p>Predicted a First Class degree.</p>
        </fieldset>
        <fieldset class="fieldaround">
            <legend>2019-2021</legend>
            <img id="me" src="images/harris.png" alt="me!">
            <h1 style="color: white">Harris Academy Chafford Hundred</h1> 
            <p>Studied Mathematics, Further Mathematics, Business, Law.</p>
            <p>Took part in extracurricular activities related to businesses and charity work.            </p>
        </fieldset>
        <fieldset class="fieldaround">
            <legend>2015-2019</legend>
            <img id="me" src="images/toa.jpg" alt="me!">
            <h1 style="color: white">The Ockendon Academy</h1> 
            <p>Achieved nine GCSEs and a Level 2 vocational qualification in Financial Studies.</p>
            <p>Took part in UK Mathematics Trust challenges three years in a row.</p>
            <p>Took part in Thurrock's Next Top Boss.</p>
            <p>Class Ambassador for Mathematics.</p>
            <p>Completed a GCSE Computer Science course on a dice game.</p>
        </fieldset>
    </div>
    <aside>
        <fieldset class="fieldaround" style="margin-top: 11.5em">
            <legend>Qualifications</legend>
            <p>9 GCSEs</p>
            <p>Level 2 Finance NVQ</p>
            <p>4 A-Levels</p>
            <p>Working Towards BSc</p>
            <p>Level 1 H&S NVQ</p>
        </fieldset>
    </aside>
    <footer class="bottom">
        <nav style="text-align: center">
            <ul>
                <a href="https://github.com/leo-lungu"><img class="contactmebutton" src="images/github.png"></a>
                <li class="footercontact">https://github.com/leo-lungu</li>
                <a href="https://www.linkedin.com/in/leonard-lungu-6384321ba/"><img class="contactmebutton"  src="images/linkedin.png"></a>
                <li class="footercontact">https://www.linkedin.com/in/leonard-lungu-6384321ba/</li>
                <a href="mailto:leonard.lungu@eecs.qmul.ac.uk"><img class="contactmebutton"  src="images/mail.png"></a>
                <li class="footercontact">leonard.lungu@eecs.qmul.ac.uk</li>
                <a href="tel:07000000000"><img class="contactmebutton"  src="images/phone.png"></a>
                <li class="footercontact">07000 000000</li>
            </ul>
        </nav>
    </footer>
</body>
</html>








