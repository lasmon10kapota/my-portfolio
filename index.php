<?php include ('databaseconnection.php'); ?>

<!DOCTYPE html>
  <html lang="en_us">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Lasmon's Portfolio</title>
          <link rel="stylesheet" href="index.css">
          <script src="myjavascript.js"></script>
    </head>

    <body onload="onLoadingPage()">
        <header>
            <nav>
                <ul>
                    <h2 title="The owner of this Website, ICT Expert.">LASMON KAPOTA</h2>
                    <li><a  href="Projects.php">Projects</a></li>
                    <li><a  href="skills.php">Skills</a></li>
                    <li><a  href="contact.php">Contact</a></li>
                    <li><a  href="aboutme.php">About Me</a></li>
                    <li class="active"><a   href="index.php">Home</a></li>
                  </ul>
            </nav>
            
        </header>
      
        <div class="intro-text">
            <h1 id="hd1">Hello! <br> My Dear Friends.</h1>
            <p id="para1">Most welcome to my humble website.</p>
            <p id="para1">Full stack Developer and Programmer.</p>
        </div>
            <img src="mypic.jpg" alt="My self picture when I was in white T-shirt"/><br><br>
    <hr>
    <h1 style="text-align: center;" style="color:#2e3550">Introduction</h1>
    <p>
      I would like to introduce myself with gladness that I have got competent skills in ICT (Information and Communication Technology) that I can do
      so many wonderful things like Web designing and development, building different mobile and desktop applications,
      graphic designing, video production, and many more.
    </p>
    <p>
      I have provided you with some relevant sections in the navigation bar so that in case there is a need to know
      more about what this website is all about and whether it can benefit you in one way or another, you are 
      so welcome and feel free to navigate through the site and I am cock sure that you are going to find what you have been looking for.
      Once again you are welcome to my website.
    </p>
    <p>
      In case you want to get in touch with me, I have provided the form below. You can fill out the required details and click on the submit button.
    </p><br>

     <Form method="post" action="index.php">
        <h3 style="color:DodgerBlue;">Fill the required details in the spaces provided:</h3><br>
        <label for="fname">Name:</label>
        <input type="text" id="fname" name="fname" placeholder="Your full name here" required/><br><br>
        <label for="emel">Email:</label>
        <input type="email" id="emel" name="emel" placeholder="Your address here" required/><br><br>
        <label for="addres">Address:</label>
        <input type="email" id="addres" name="adress" placeholder="Your email here" required/><br><br>
        <label for="meseg">Message Here:</label><br><br>
        <textarea style="resize:vertical" placeholder="Type any message here which you may wish to share with me" name="message" rows="6" cols="70"></textarea><br><br>
        <input title="You can submit if you are done filling out" style="border-radius: 8px" type="submit" name="submit" value="Submit" /><br>
     </form><br>

     <p>
      If you want to get to other sections of this website right within the page to save time of Scrolling down to see the 
      navigation bar located on top of this page, you can also just use the links below: 
    </p>
    <p class="para"><a href="aboutme.php">About Me</a></p>
    <p class="para"><a href="contact.php">Contact</a></p>
    <p class="para"><a href="skills.php">Skills</a></p>
    <p class="para"><a href="projects.php">Projects</a></p>
       
    <footer>
        <h2 title="Email: lsmnkapota@gmail.com & Tel: 0998306445"> &copy; Lasmon ICT Viewpoint</h2>
    </footer>
    </body>
</html>
