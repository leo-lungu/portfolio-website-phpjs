<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="javascript/script.js"></script>
</head>
<body">
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
        <main>
            <fieldset class='fieldblog'>
            <legend><h1 id="blog">Blog</h1></legend>
            <?php


            if (isset($_SESSION['email'])) {
            ?>
            <form action="/add.php">
                <input class="gotoblog" type="submit" value="Add a post to the blog"/> <br>
            </form>
            <?php

            } else {
            ?>
            <form action="/login.html">
                <input class="gotoblog" type="submit" value="Add a post to the blog"/> <br>
            </form>
            <?php } ?>
            
            <section>
            <form action="" method="post" id="months">
                    <select name="month" onchange="this.form.submit()"; >
                        <option value="All">Select</option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                        <option value="All">All</option>
                    </select>
                </form>
                <article>
                    <?php
                        include 'connection.php';
                        if(isset($_POST['month'])){ //check if form was submitted
                            $month = $_POST['month'];
                            $result= $conn->query("SELECT * FROM posts WHERE EXTRACT(MONTH FROM date) = '$month'");
                            if ($month === "All") {
                                $result= $conn->query("SELECT * FROM posts");
                            } else { 
                                $result= $conn->query("SELECT * FROM posts WHERE EXTRACT(MONTH FROM date) = '$month'");
                            }
                            if (mysqli_num_rows($result) == 0) {
                                echo "<p style='text-align: left; font-size: 70%'>No results that month! Select another month! </p>";
                            } else {
                            
                        while($row = $result->fetch_assoc()){
                                echo "<p style='text-align: right; font-size: 70%'>";
                                echo $row['date'] . " &nbsp;&nbsp; " . $row['time'];
                                echo "<p style='font-size: 150%'>";
                                echo $row['title'];
                                echo "<br>";
                                echo "</p><p>";
                                echo $row['body'];
                                echo "</p>";
                                echo "<br>";
                                echo "<hr>";
                            }
                        }
                        } else {
                            $result= $conn->query("SELECT * FROM posts");
                            while($row = $result->fetch_assoc()){
                                echo "<p style='text-align: right; font-size: 70%'>";
                                echo $row['date'] . " &nbsp;&nbsp; " . $row['time'];
                                echo "<p style='font-size: 150%'>";
                                echo $row['title'];
                                echo "<br>";
                                echo "</p><p>";
                                echo $row['body'];
                                echo "</p>";
                                echo "<br>";
                                echo "<hr>";
                            }
                        }
                    

                    /* $arrayDates = array();
                    while($row = $result->fetch_assoc()){
                        $arrayDates[] = $row['date'];
                    }
                    echo implode(', ',$arrayDates );
                    $sorted=false;
                    while (!$sorted) {
                        $sorted = true;
                            
                    //traverse array to end switching ill-ordered pairs
                    for ( $i = 0, $c = count( $arrayDates ) - 1; $i < $c; $i++ )
                    {
                        if ($arrayDates[$i] > $arrayDates[$i + 1])
                        {
                            list( $arrayDates[$i + 1], $arrayDates[$i] ) =
                            array( $arrayDates[$i], $arrayDates[$i + 1] );
                            $sorted = true;
                    }

                        
                }
                echo implode(', ',$arrayDates ); */
        
                    ?>
                </article>
            </section>
                    </fieldset>
        </main>
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








