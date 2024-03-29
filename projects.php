<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
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
            <legend>Java Procedural Programming</legend>
            <img id="me" src="images/java.png" alt="me!">
            <h1 style="color: white">Pet Game</h1> 
            <p>I created a game using several hundreds of codes 
                and several libraries where a user had to take 
                care of their pet. They were able to play with 
                them, feed them and pet them. The game was based 
                on 5 rounds. The user must make sure that the pet 
                survives until the end.</p>
            <p>If the user lost, they would be given their final 
                score and were able to try and play again if they wished.</p>
        </fieldset>
        <fieldset class="fieldaround">
            <legend>HTML, CSS, JavaScript and PHP</legend>
            <img id="me" src="images/html.png" alt="me!">
            <h1 style="color: white">Portfolio Website</h1> 
            <p>Made this portfolio website using HTML, CSS, JavaScript and PHP. 
                The website was split into 2 phases. The Front End phase was 
                HTML and CSS, where I created the interface and the general 
                layout of the website and how it looks. The second phase was 
                JavaScript and PHP, where I made sure the login form worked, 
                and that I would be able to post blogs to the website.</p>
        </fieldset>
        <fieldset class="fieldaround">
            <legend>2015-2019</legend>
            <img id="me" src="images/java.png" alt="me!">
            <h1 style="color: white">Java Object Oriented Programming</h1> 
            <p>On going project in Java using Object Oriented Programming.
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








