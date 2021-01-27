<?php 
require_once 'index.php';
   // after we are confident with msqli (instead of using mysqli you can experiment with PDO "which uses objects")

//     //CONNECT TO DATABASE
//    $conn= mysqli_connect('localhost','selin','','crud');
//    // mysqli_connect(host,username,password,databasename we want to call) so takes 4 parameters like above.
   
//    //CHECK CONNECTION
//     if(!$conn){
//         echo 'Connection error' .mysqli_connect_error();
//     }
   // WRITE QUERY & GET RESULT WITH SELECT * FROM  * MEANS ALL COLUMNS
    // $sql='SELECT month FROM measures_baby_clothing';

    // //MAKE A QUERY/REQUEST & GET RESULT which takes 2 parameters with the connection and the sql we want to get
    // $result=mysqli_query($conn,$sql);

    // //fecth the resulting rows as an array

    // $groups=mysqli_fetch_all($result,MYSQLI_ASSOC); // FETCH ALL DATA AND WE WANT TO SHOW IT AS AN ASOSSIATIVE ARRAY WITH THE LAST METHOD
   
    // print_r($groups);




//insert the name and month into the database if the save button is pressed.
    
   
   ?>