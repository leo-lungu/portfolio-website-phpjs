<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
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
    <div class="parallax1">
        <fieldset class="fieldaround" style="margin-bottom: auto">
            <legend>Leonard Lungu</legend>
                <img id="me" src="images/me.jpeg" alt="me!">
                <h1 style="color: white; margin-bottom: 10px" id="me">Hey there!</h1>
                <p style="color: white">I am a BSc Computer Science student at Queen Mary University of London. I am passionate about software engineering and web development. I love to pay attention to detail and to put my creativity to work. I have programmed for a few years now, including programming languages such as Java and Python. I also have experience in used HTML, CSS, JavaScript and php.</p>
        </fieldset>
    </div>
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