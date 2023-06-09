<?php include("databaseconnection.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mr. Lasmon's Portifolio</title>
        <link rel="stylesheet" href="skills.css">
        <script src="skills.js"></script>

    </head>
    <body onload="onLoadingPage()">
        <header>
            <nav>
                <ul>
                    <h2 title="The owner of this Website, ICT Expert.">LASMON KAPOTA</h2>
                    <li><a  href="Projects.php">Projects</a></li>
                    <li class="active"><a  href="skills.php">Skills</a></li>
                    <li><a  href="contact.php">Contact</a></li>
                    <li><a  href="aboutme.php">About Me</a></li>
                    <li><a  href="index.php">Home</a></li>
                  </ul>
            </nav>
            
        </header>

        <?php mySkills(); ?>

        <footer>
            <h2 title="Email: lsmnkapota@gmail.com & Tel: 0998306445"> &copy; Lasmon ICT Viewpoint</h2>
        </footer>

    </body>
    
</html>