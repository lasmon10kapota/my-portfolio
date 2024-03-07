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
          width: 500px;
          height: 400px;
          border: 5px solid #2e3550;
          border-radius: 20px;
        }
        h3{
          text-align: center;
        }
        address, .heading{
          text-align: center;
          margin-left: 250px;
        }
        p{
          margin-left: 20px;
          margin-right: 20px;
          font-family: Arial;
        }
        .space{
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
                    <li class="active"><a  href="contact.php">Contact</a></li>
                    <li><a  href="aboutme.php">About Me</a></li>
                    <li><a  href="index.php">Home</a></li>
                  </ul>
            </nav>
            
        </header>
        <div class="container">
          <div class="img">
            <img src="las_at_car.jpg" alt="My picture in which I stood beside someone's car."/>
          </div>
          <div class="h3">
            <h3>
              My name : Lasmon Kapota<br><br>Nationality : Malawian<br><br>District : Ntcheu, central region<br><br>Village : Muwalo near Gowa Mission<br><br>
              University : Mzuzu University, northen region<br><br>Program of study : Information and Communication technology (ICT)<br><br>Year of study : Year <?php echo date('Y') - 2021 ?><br><br>
              Mode of Learning : Face to face (generic) 
            </h3>
          </div>
       </div>
       <br><hr><br><br>
       <div class="container">
        <div>
       <h3 class="heading">
        Here is my Contact Details
       </h3>
       <address>
        <p class="space">
          Email : lasmonkapota@gmail.com<br>OR<br>Email : kapotalasmon@gmail.com<br>Tel : 0998306445<br>or<br>Tel : 0983790523<br>
        </p>
       </address>
       </div>
       <div>
       <h3 class="heading">
        Here is my University's Details
       </h3>
       <address>
        <p style class="space">
        Mzuzu University<br>
        P/Bag 201<br>
        Luwinga, Mzuzu<br>
        Registrar's email address : ur@mzuni.ac.mw<br>
        Website <a href="https://www.mzuni.ac.mw">www.mzuni.ac.mw</a><br>
        </p>
      </address>
       </div>
      </div>
       
    <h2 title="Email: lsmnkapota@gmail.com & Tel: 0998306445" style="color:#2e3550; font-size:15px;  margin-bottom:30px; margin-left:550px";>
        &copy; Lasmon ICT Viewpoint 2023
    </h2>
        

    </body>
    
</html>