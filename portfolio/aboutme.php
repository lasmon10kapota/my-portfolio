<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lasmon's Portfolio</title>
        <link rel="stylesheet" href="nav.css">
        <style>
          
            .container{
              display:flex;
              align-items: center;
              column-gap: 30px;
            }
            img{
              margin-left: 50px;
              width: 400px;
              height: 200px;
              border: 5px solid #2e3550;
              border-radius: 20px;
            }

            h3{
              color:#2e3550;
              margin-right: 50px;
              line-height: 1.8;
            }

            p{
              margin-left: 20px;
              margin-right: 20px;
              font-family: 'Times New Roman', Times, serif;
              font-size: 20px;
            }
            .para, address{
              text-align: center;
              line-height: 1.6;
            }

        </style>    
    </head>

    <body>
        <header>
            <nav>
                <ul>
                    <h2 title="The owner of this Website, ICT Expert.">LASMON KAPOTA</h2>
                    <li><a  href="Projects.php">Projects</a></li>
                    <li><a  href="skills.php">Skills</a></li>
                    <li><a  href="contact.php">Contact</a></li>
                    <li class="active"><a  href="aboutme.php">About Me</a></li>
                    <li><a  href="index.php">Home</a></li>
                  </ul>
            </nav>
            
        </header>

        <div class="container">
            <div class="img">
              <img src="MyPicture.jpg" alt="My PhotoShop picture that I first created."/>
            </div>
            <div>
            <h3 style="color:#2e3550"><i>
              Having observed the constantly advancing technology, it is my pleasure to work in the field
              of Infomation and communication technology (ICT) which is now the only dominating field across the world.
              It has been always my dream to pursue this awesome aspect of science and thank God for making my 
              belated dream come true. My vision is to uplift technological life by providing
              people from different parts of the world with more sophisticated information technology that will make life easier and enjoyable.
            </i></h3>
          </div>
        </div>
        <br><br>

        <div class="container">
          <div>
        <h2 class="para">
          My Educational Background
        </h2>
        <p class="para">
          Currently learning at Mzuzu University<br>University in northen region of Malawi<br>Pursuing bachelor of scieance in Information and Communication Technology (ICT)<br>
          Currently in secong Year<br>Got various <a href="skills.php">skills</a> including software development and manipulation
        </p>
          </div>
          <div>
        <h2 class="para">
         Further University Details
        </h2>
        <p class="para">
          <address>
            Mzuzu University<br>
            P/Bag 201<br>
            Luwinga, Mzuzu<br>
            Registrar's email address : ur@mzuni.ac.mw<br>
            Website <a href="https://www.mzuni.ac.mw">www.mzuni.ac.mw</a>
          </address>
        </p>
            </div>
            <div>
        <h2 class="para">
          My Personal Particulars
        </h2>
        <p class="para">
          Lasmon Kapota, Male<br> Aged <?php echo date('Y') - 2001 ?>, Unmarried, Malawian<br>Having Both parents<br>Christian of SDA (Seventh Day Adventist) Church<br>
          More contact information, <a href="contact.php">click here</a>
        </p>
          </div>
        </div> 
      
    <h2 title="Email: lsmnkapota@gmail.com & Tel: 0998306445" style="color:#2e3550; margin-bottom:30px; font-size:15px; margin-left:550px";>
        &copy; Lasmon ICT Viewpoint 2023
    </h2>
    </body>
    
</html>