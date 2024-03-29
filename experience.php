<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experience</title>
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
        <section id="fieldset">
            <fieldset class="fieldaround">
                <legend>2019-2021</legend>
                <img id="me" src="images/ikea.png" alt="me!">
                <h1 style="color: white">IKEA</h1> 
                <p>Increased customer satisfaction by resolving service issues.</p>
                <p>Actively listened to customers' requests, confirming full understanding before addressing concerns.</p>            </p>
                <p>Carried out duties accurately and efficiently.</p>
                <p>Delivered orders to customers within specific timeframes during the pandemic.</p>
            </fieldset>
            <br id="break">
            <fieldset class="fieldaround">
                <legend>2018-2019</legend>
                <img id="me" src="images/gateway.png" alt="me!">
                <h1 style="color: white">Gateway 97.8</h1> 
                <p>Undertaking general research for radio programmes.</p>
                <p>Producing transcripts, programme logs and running orders.</p>
                <p>Editing audio packages with digital editing software.</p>
                <p>Responding to technical faults and repairing them.</p>
            </fieldset>
        </section>
    </div>
    <aside>
        <fieldset class="fieldaround" style="margin-top: 3.5em">
            <legend>Future</legend>
            <img id="me" src="images/me.jpeg" style="display: block; margin-left: 8%"alt="me!">
            <h1 style="color: white">Software Developer</h1> 
            <br>
            <p>I'm looking for internships in software developing and engineering!</p>
            <br>
            <p>I'm also interested in financial technology and web developing.</p>
            <br>
            <p>On the Projects page you can find some of my projects and other things I've done related to Computer Science.</p>
            <br>
            <p>To fully view my skills, check out the skills page!</p>
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



