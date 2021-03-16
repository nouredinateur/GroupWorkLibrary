<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author</title>
    <link rel="stylesheet" href="css/author.css">
    <script src="https://kit.fontawesome.com/40c8b0b6ff.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="formulaire">

    <form class="adding" action="author_backend.php" method="POST">
        
        <label for="name-author"></label>
        <input type="text" id="name-author" name="cin" placeholder="Add the author's CIN">
        <label for="name-author"></label>
        <input type="text" id="name-author" name="name" placeholder="Add the author's name">
        <label for="name-author"></label>
        <input type="date" id="name-author" name="date" placeholder="Add the author's date of birth">
        <button type="submit" name="add">Add author</button>
        

    
    </form>
    <div>
        <img src="img/01.svg" alt="books">
    </div>

    </div>

    <!-- table -->
    <div class="table-holder">
    <table>
        <tr>
            <th>Author</th>
            <th>Cin</th>
            <th>Birth</th>
            <th>Action</th>
        </tr>

        <!-- show table data -->

        <?php
        include 'connection.php';

        $sql= "SELECT * FROM `authors`";
        $excute=mysqli_query($conn,$sql);

        while($row = $excute->fetch_assoc()){
            echo "<tr> 
            <td>".$row['name']."</td>
            <td>".$row['cin']."</td>
            <td>".$row['birth']."</td>
            <td><a href='author_backend.php?cin=".$row['cin']."' name='delete'>delete</a></td>
            <td><a href='add_author.php?cin=".$row['cin']."'>update</a></td>
            
            </tr>";
        }
        ?>

    </table>
    </div>
</body>
<!--footer-->

<footer>
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
</footer>
</html>