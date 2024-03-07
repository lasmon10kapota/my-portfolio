<?php include ('databaseconnection.php'); ?>

<!DOCTYPE html>
  <html lang="en_us">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Lasmon's Portfolio</title>
          <link rel="stylesheet" href="nav.css">
          <style>  
          .container{
          display:flex;
          column-gap: 50px;
        }
        .intro-text{
          display: inline-block;
            text-align: center;
            background-color: #eeedff;
            margin-top: 0px;
            width: 55%;
            border: 1px solid mediumslateblue;
            border-radius: 10px;
            padding: 4px;
        }
        img{
            border-radius: 40%;
            width: 200px;
            height: 260px;
        }
       #left{
          float: left;
          margin-left: 60px;
        }
       #right{
          float: right;
          margin-right: 70px;
        }

        p{
          margin-left: 20px;
          margin-right: 20px;
          font-family: 'Times New Roman', Times, serif;
          font-size: 22px;
        }
        #hd1{
            color:darkgreen;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        #para1{
            color: dodgerblue;
            font-size: 25px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif
        }
        .hide_form{
          background-color: #eeedff;
          margin: -100% 25%;
          padding: 3% 0% 3% 2%;
          border-radius: 20px;
          width: 44%;
          visibility: hidden;
          position: absolute;
        }
        .displayform{
          background-color: #eeedff;
          margin: 0% 25%;
          padding: 3% 0% 3% 2%;
          border-radius: 20px;
          width: 44%;
          visibility: visible;
        }
        input{
          width: 550px;
          height: 40px;
          border-radius: 4px;
           border: 1px solid black;
        }
        #clearbtn, #hidebtn{
          width: 46%;
        }
        textarea{
          width: 550px;
          border-radius: 4px;
          border: 1px solid black;
          font-size: 15px;
        }
        .para{
          text-align: center;
        }
       #showbtn{
        border: 0px solid black;
        border-radius: 3px;
       }
        .txtmoveright{
            animation: slideright 2s ease forwards;
            animation-delay: 0s;
        }
        .txtmoveleft{
            animation: slideleft 2s ease forwards;
            animation-delay: 0s;
        }
        @keyframes slideright{
            0%{
                opacity: 0;
                transform: translateX(100px);
            }
            100%{
                opacity: 1;
                transform: translateX(0);
            }
        }
        @keyframes slideleft{
            0%{
                opacity: 0;
                transform: translateX(-100px);
            }
            100%{
                opacity: 1;
                transform: translateX(0);
            }
        }
        
          </style>
          <script src="myjavascript.js"></script>
    </head>

    <body onload = changeImage()>
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
      <div class = "container">
         <div>
        <img id="left" name = "slide1" alt="My picture"/>
        </div>
        <div class="intro-text">
            <h1 id="hd1" class="txtmoveright">Hello!</h1>
            <h1 id="hd1" class="txtmoveleft">My Dear Friends</h1>
            <h3 id="para1" class="txtmoveright">Most welcome to my Portfolio</h3>
            <h3 id="para1" class="txtmoveleft">Am a Full Stack Developer <em>(Hire Me)</em></h3>
        </div>
        <div>
        <img id="right" name = "slide2" alt="My picture"/>
        </div>
      </div>
      <br><br>
    <hr>
  
    <p>
      I would like to introduce myself with gladness that I have got competent skills in ICT (Information and
      Communication Technology) that I can do so many wonderful things like Web designing and development, 
      building different mobile and desktop applications, graphic designing, and many more.
    </p>
    <p>
      I have provided you with some relevant sections in the navigation bar so that when you need more
      information about the website you can feel free to navigate.
    </p>
    <hr>
    <p style = "margin:0% 23%" class="P_show">
      In case you want to get in touch with me, you can  <button id="showbtn" name="showbtn"  style="background-color:darkgray">click here</button> and do the needful.
    </p><br>

     <Form method="post" action="index.php" class="hide_form">
        <h3 style="color:DodgerBlue;">Fill the required details in the spaces provided:</h3><br>
        <label for="fname">Name:</label><br><br>
        <input type="text" id="fname" name="fname" placeholder="Your full name here" required/><br><br>
        <label for="emel">Email:</label><br><br>
        <input type="email" id="emel" name="emel" placeholder="Your email here" required/><br><br>
        <label for="addres">Address:</label><br><br>
        <input type="text" id="addres" name="adress" placeholder="Your address here" required/><br><br>
        <label for="meseg">Message Here:</label><br><br>
        <textarea style="resize:vertical" placeholder="Type any message here which you may wish to share with me" name="message" rows="6" cols="70"></textarea><br><br>
        <input title="You can submit if you are done filling out" style="background-color:skyblue" type="submit" name="submit" value="Submit" /><br><br>
        <input title="You can hide the form if you have submitted" type="button" id="hidebtn" name="hidebtn"  style="background-color:darkgray" value="Hide">
        <input title="If you want to clear out the form, click here" style="background-color: pink" type="reset" id="clearbtn" name="clear" value="Clear" />
     </form><br>
       
     <h2 title="Email: lsmnkapota@gmail.com & Tel: 0998306445" style="color:#2e3550; font-size:15px;  margin-bottom:30px;  margin-left:550px";>
        &copy; Lasmon ICT Viewpoint 2023
    </h2>
        
    <script>
      var showform = document.querySelector("#showbtn");
      var mainform = document.querySelector("form");
      var hideform = document.querySelector("#hidebtn");
      var form_preceding_paragraph = document.querySelector(".P_show");
      hideform.addEventListener("click", ()=>{
            mainform.classList = "hide_form";
            form_preceding_paragraph.style.visibility = "visible";
        });
        showform.addEventListener("click", ()=>{
            mainform.classList = "displayform";
            form_preceding_paragraph.style.visibility = "hidden";
        });

    
        var counter = 0;
        var images = ["mypic.jpg", "MyPicture.jpg", "las_at_car.jpg"];

        function changeImage(){
            document.slide1.src = images[counter];
            document.slide2.src = images[counter];
            if(counter < images.length-1){
                counter++;
            }else{
                counter = 0;
            }
            setTimeout("changeImage()",1500); //1000 represents one second
        }
        </script>


    </body>
</html>
