<?php
$servername="localhost";
$username="root";
$password="";
$databasename="my_portfolio";

$conn=mysqli_connect($servername, $username, $password) or die("No Connection!");
mysqli_select_db($conn, $databasename) or die("Database could not open!");

function mySkills(){
    global $conn;
    $query = "SELECT * FROM skills";
    $result = mysqli_query($conn, $query) or die("Query could not fetch data!");
    $num = mysqli_num_rows($result);
    $i = 0;
    while ($i < $num){
        $row=mysqli_fetch_array($result);
        
        echo '<h2 class="para">' . $row["skill"].'</h2>' . '<p class="para">' . $row["description"] . '</p>';

        $i++;
    }
}


function myProjects(){
    global $conn;
    $query = "SELECT * FROM projects";
    $result = mysqli_query($conn, $query) or die("Query could not fetch data!");
    $num = mysqli_num_rows($result);
    $i = 0;
    while ($i < $num){
        $row=mysqli_fetch_array($result);
        
        echo '<h2 class="para">' . $row["project"].'</h2>' . '<p class="para">' . $row["description"] . '</p>';

        $i++;
    }
}


?>