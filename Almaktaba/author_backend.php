<?php
// adding 

    include 'connection.php';

    if(isset($_POST["add"])){
        $cin = $_POST["cin"];
        $name = $_POST["name"];
        $date = $_POST["date"];

        $sql= "INSERT INTO `authors`(`cin`, `name`, `birth`) VALUES ('$cin','$name','$date')";
        $excute=mysqli_query($conn,$sql);
        header('location:author.php');
    }
    
//delete

    if(isset($_GET["cin"])){
        $delete="DELETE FROM `authors` WHERE cin='".$_GET["cin"]."'";
        $excute=mysqli_query($conn,$delete);
        header('location:author.php');
    }

// update
 
    if(isset($_POST["edit"])){
        $cin=$_POST["cin"];
        $name=$_POST["name"];
        $birth=$_POST["date"];

        $query="UPDATE `authors` SET `name`='$name',`birth`='$birth' WHERE cin='$cin'";
        $excute=mysqli_query($conn,$query);
        header('location:author.php');

    }

?>