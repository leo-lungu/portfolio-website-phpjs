<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="top">
        <nav>
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
        </nav>
    </header>
    <div class="parallax1 asidemain">
        <fieldset class="fieldaround">
            <legend>Markup</legend>
            <figure>
                <img id="me" src="images/html.png" alt="HTML">
            </figure>
            <h1 style="color: white">HTML</h1> 
            <p>Created several webpages and websites.</p>
            <p>Experience in webpages using forms, tables and other elements.</p>
            <p>Clean organisation of the code and usage of semantic elements.</p>
        </fieldset>
        <fieldset class="fieldaround">
            <legend>Sheet Style</legend>
            <figure>
                <img id="me" src="images/css.png" alt="CSS">
            </figure>    
            <h1 style="color: white">CSS</h1> 
            <p>Experience in CSS, including bootstrap.</p>
            <p>Good creativity skills.</p>
            <p>Clean organisation of the code and usage of essential comments</p>
        </fieldset>
        <fieldset class="fieldaround">
            <legend>Programming</legend>
            <figure>
                <img id="me" src="images/java.png" alt="Java">
            </figure>
            <h1 style="color: white">Java</h1> 
            <p>Hundreds of hours of experience in Java.</p>
            <p>Worked with different classes including GUI ones such as AWT and Swing.</p>
            <p>Created several programs and games in OOP style.</p>
        </fieldset>
    </div>
    <aside class="skill">
        <fieldset class="fieldaround" style="margin-top: 3.5em">
            <legend>Skills</legend>
            <p>HTML</p>
            <div class="container">
                <div class="html skills"></div>
            </div>
            <p>CSS</p>
            <div class="container">
                <div class="css skills"></div>
            </div>
            <p>Java</p>
            <div class="container">
                <div class="java skills"></div>
            </div>
            <p>Python</p>
            <div class="container">
                <div class="python skills"></div>
            </div>
            <p>SQL</p>
            <div class="container">
                <div class="sql skills"></div>
            </div>
        </fieldset>

        <fieldset class="fieldaround" style="margin-top: 1.5em">
            <legend>Skills</legend>
            <p>Creativity</p>
            <p>Organisation</p>
            <p>Team Member</p>
            <p>Leadership Skills</p>
            <p>Communication</p>
            <p>Critical Thinking</p>
            <p>Time Management</p>
        </fieldset>

        <fieldset class="fieldaround" style="margin-top: 1.5em">
            <legend>Achievements</legend>
            <p>UKMT Challenges</p>
            <p>Business Projects</p>
            <p>Business Competition</p>
            <p>2 Years Work Experience</p>
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








