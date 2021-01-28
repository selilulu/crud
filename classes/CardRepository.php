<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{
    private $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create()
    {
        if (isset($_POST['save'])) {
            $name = $_POST['name'];
            $month = $_POST['month'];
    
            $this->databaseManager->mydatabase->query( "INSERT INTO measures_baby_clothing (name, month) VALUES ('$name', '$month')"); 
            
        }
    
    }

    // Get one
    public function find()
    {

    }

    // Get all
    public function get()
    {
        // TODO: replace dummy data by real one
        // return [
        //     ['name' => 'watermelon'],
        //     ['name' => 'strawberries'],
        //     ['name' => 'blueberries'],
        //     ['name' => 'cranberries'],
        //     ['name' => 'cherries']

        // ];

        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->database-> (runYourQueryHere)



        // $sql="SELECT *FROM measures_baby_clothing;";
        //this is one way to do it but below it is kind of shortcut 
        // meaning we dont need to create 2 variables like conn and sql // $result=mysqli_query($conn,$sql)

        $result=$this->databaseManager->mydatabase->query("SELECT * FROM measures_baby_clothing ");
            //to show any error
        if(!$result){
            var_dump($this->databaseManager->mydatabase->error);

        }
        //get all data as an assosiative array and return
        $row=$result->fetch_all(MYSQLI_ASSOC);
        // echo '<td>'.$row['name'].'</td>';  a try out for a table look
        echo '<pre>';
        // var_dump($row);
        echo '</pre>';

        return $result;

    }

    public function update()
    {
        
        if(isset($_POST['button'])){

        $id= $_GET['edit']; // GET method is important in otherwise edit will not happen, edit comes where i have the a href tag with edit name in overview.php


        $editedName=$_POST['name'];

        $editedMonth=$_POST['month'];

        $this->databaseManager->mydatabase->query("UPDATE measures_baby_clothing SET name='$editedName', month='$editedMonth 'WHERE id=$id ");

        header('Location: index.php');


    }
}

    
    public function delete()
    {
        if(isset($_POST['Dbutton'])){

            $id= $_GET['delete'];//this delete targets the delete at the end -> <a href="deleteIndex.php?delete=
    
            
            $this->databaseManager->mydatabase->query("DELETE FROM measures_baby_clothing WHERE id=$id ");
    
            header('Location: index.php');
    
    
        }
        // var_dump($id);
    }

}