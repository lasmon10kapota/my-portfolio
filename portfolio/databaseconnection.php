<?php
$servername="localhost";
$username="root";
$password="";
$databasename="my_portfolio";

$conn=mysqli_connect($servername, $username, $password) or die("No Connection!");
mysqli_select_db($conn, $databasename) or die("Database could not open!");

//Creating a function that will be retrieving data from database in the  skills table
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

//Creating a function that will be retrieving data from database in the  projects table
function myProjects(){
    global $conn;
    $query = "SELECT * FROM projects";
    $result = mysqli_query($conn, $query) or die("Query could not fetch data!");
    while ( $row=mysqli_fetch_array($result)){
        echo '<h2 class="para">' . $row["project"].'</h2>' . '<p class="para">' . $row["description"] . '</p>';
    }
}
//for the contact form in the index.php to check if the details are set
// and then post them to the database in contact table
if(isset($_POST['submit'])){
    $name = $_POST['fname'];
    $email = $_POST['emel'];
    $address = $_POST['adress'];
    $message = $_POST['message'];
    $query = "INSERT INTO contact(name, email, address, message) VALUES ('$name', '$email', '$address', '$message')";
    $result = mysqli_query($conn, $query);
    if($result){
        header('location: index.php');
    } else {
        echo "Query failed" . mysqli_error($conn);
    }
}

?>