<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Author</title>
    <link rel="stylesheet" href="css/add.author.css">
    <script src="https://kit.fontawesome.com/40c8b0b6ff.js" crossorigin="anonymous"></script>
</head>

<!-- LA récupération des données du formulaire -->

<?php
    include 'connection.php';

    if(isset($_GET['cin'])){
        $sql = "SELECT * FROM `authors` WHERE cin='".$_GET["cin"]."'";
        $excute = mysqli_query($conn,$sql);
        while($row = $excute->fetch_assoc()){
            $cin=$row['cin'];
            $name=$row['name'];
            $birth=$row['birth'];
        }

    }
?>

<body>
    <form class="adding" action="author_backend.php" method="POST">
        <label for="name-author"></label>
        <input type="text" id="name-author" value="<?=$cin?>" name="cin" placeholder="Add the author's CIN">
        <label for="name-author"></label>
        <input type="text" id="name-author" value="<?=$name?>"name="name" placeholder="Add the author's name">
        <label for="name-author"></label>
        <input type="date" id="name-author" value="<?=$birth?>"name="date" placeholder="Add the author's date of birth">
        <button type="submit" name="edit">Edit</button>
    </form>


</body>

<!-- <footer>
	<div class="phone footer">
		<i class="fas fa-phone"></i>
		<h3>************</h3>
	</div>
	<div class="email footer">
		<i class="fas fa-envelope-open-text"></i>
		<h3>************</h3>
	</div>
	<div class="facebook footer">
		<i class="fab fa-facebook"></i>
		<h3>************</h3>
	</div>
	<div class="instagram footer">
		<i class="fab fa-instagram"></i>
		<h3>************</h3>
	</div>
</footer> -->
</html>