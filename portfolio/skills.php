<?php include("databaseconnection.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lasmon's Portfolio</title>
        <link rel="stylesheet" href="nav.css">
        <style>
            p{
            margin-left: 20px;
            margin-right: 20px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 22px;
            }
            .para{
            text-align: center;
            }
        </style>
    </head>
    
    <body>
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

           
    <h2 title="Email: lsmnkapota@gmail.com & Tel: 0998306445" style="color:#2e3550; font-size:15px;  margin-bottom:30px; margin-left:550px";>
        &copy; Lasmon ICT Viewpoint 2023
    </h2>
        

    </body>
    
</html>
