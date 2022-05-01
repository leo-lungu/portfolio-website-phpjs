<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="javascript/script.js"></script>
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
        <div id="h1img">
            <fieldset class="fieldaround">
            <legend>Blog Post</legend>
                <form id="addblog" action="addPost.php" method="POST" >
                    <h1 style="font-size: 250%; color:white">Add a new post</h1>
                    <p style="font-size: 70%; color:lightgrey">Hope all the readers will like this post!</p>
                    <input type="text" placeholder="Title" name="title" id="title" required>  <br>  
                    <textarea rows="4" placeholder="Add blog content here" cols="50" name="comment" id="comment" required></textarea> <br> 
                    <button type="submit" onclick="defaultPrevention();">Post</button>
                    <button onclick = "return confirmClear();" type="reset">Clear</button> 
                    <button type="submit" onclick="defaultPrevention();" formaction="/viewPreview.php">Preview</button>
                </form>     
            </fieldset>
            
        </div>
    </div>    
    </div>
    <aside>
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