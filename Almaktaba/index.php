
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>ALMAKTABA</title>
</head>
<body>
    <header id="hea">
        <div>
            <ul id="nav">
                <a ><button class="clicked"><li>Home</li></button></a>
                <a><li>Books</li></a>
                <a><li>Authors</li></a>
            </ul>
        </div>
        <div onclick="displayMenu()" id="menu" class="hamMenu">
            
            <i class="fas fa-bars">
                <input type="checkbox" id="ckbx">
            </i>
        </div>
    </header>
    <div class="firstSection">
        <div id="left">
            <h1>Good books don't give up<br>all their secrets at once</h1>
            <p>A small river named Dudan flows by their place and supplies<br>it with the necessary regelialia</p>
            <button>Browse</button>
        </div>
        <div id="right">
             <img src="img/book.svg" alt="book ilustration">
        </div>
    </div>
    <?php
    include 'connection/conect.php';
?>
    <div id="CategoriesHandle">Categories</div>
    <div class="categories">
        <label for="horror"></label>
        <div id="horror">
            <img id="img" src="img/horror.png" alt="watching horror in a couch illustration">
        </div>
        <label for="horror"></label>
        <div id="horror">
            <img id="img" src="img/thriller.png" alt="watching horror in a couch illustration">
        </div>
        <label for="horror"></label>
        <div id="horror">
            <img id="img"  src="img/entertainment.png" alt="watching horror in a couch illustration">
        </div>
        <label for="horror"></label>
        <div id="horror">
            <img id="img"  src="img/art.png" alt="watching horror in a couch illustration">
        </div>
    </div>
    <div class="bestBooks">
        <div>
            <div id="Drawingholder">
                <img src="img/bestbooks.png" alt="girl reading a book illustration">
                <div id="bbtext">
                    <h3>Best Books</h3>
                    <p>This week</p>
                </div>
            </div>
        </div>
    </div>
    <div class="shelve">
        <div>
            <img src="img/book1.jpg" alt="Before you say goodbay book cover">
        </div>
        <div>
            <img src="img/book2.jpg" alt="Before you say goodbay book cover">
        </div>
        <div>
            <img src="img/book3.jpg" alt="Before you say goodbay book cover">
        </div>
    </div>


<div class="blank"></div>
<footer>
    <div class="phone footer">
        <i class="fas fa-phone"></i>
        <h3>**</h3>
    </div>
    <div class="email footer">
        <i class="fas fa-envelope-open-text"></i>
        <h3>**</h3>
    </div>
    <div class="facebook footer">
        <i class="fab fa-facebook"></i>
        <h3>**</h3>
    </div>
    <div class="instagram footer">
        <i class="fab fa-instagram"></i>
        <h3>**</h3>
    </div>
</footer>
<script src="https://kit.fontawesome.com/21917d46d7.js" crossorigin="anonymous"></script>
<script>
    function displayMenu(){
        var header = document.getElementById('hea');
        header.id = "wholescreen"
       
    }
</script>
</body>
</html>