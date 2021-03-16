<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="./css/gallery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/40c8b0b6ff.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="filter">
    <!-- <label for="search"></label>
    <input type="text" id="search" placeholder="Search"> -->
    <select class="authors" name="author" id="authors" form="authorform" onchange="filter()">
      <option id="aa">Choose Author</option>
      <option >Yann Martel</option>
      <option >Carl Sagan</option>
      <option >Yuval Noah Harari</option>
      <option >Neil deGrasse Tyson</option>
    </select>
    <label for="min"></label>
    <input type="number" id="min" placeholder="Min">
    <label for="max"></label>
    <input type="number" id="max" placeholder="Max">
    <label for="submit"></label>
    <button type="submit" onclick="pricee()"><i class="fa fa-search" ></i></button>
</div>

<!-- Books -->

<h1>BOOKS</h1>

<div class="books">
     <div class="grid-container">
        <div class="grid-item" name="book">
            <img class="book" src="img/1.jpg" alt="book1">
            <div class="name">
               <h3>Life of Pi</h3>
               <p name="writer"> Yann Martel</p>
               <p class="price">9$</p>
            </div>
         </div>

         <div class="grid-item" name="book">
            <img class="book" src="img/2.jpg" alt="book2">
            <div class="name">
               <h3>Cosmos</h3>
               <p name="writer"> Carl Sagan</p>
               <p class="price">12$</p>

            </div>
         </div>

         <div class="grid-item" name="book">
            <img class="book" src="img/3.jpg" alt="book3">
            <div class="name">
               <h3>Astrophysics</h3>
               <p name="writer">Neil deGrasse Tyson</p>
               <p class="price">14$</p>

            </div>
         </div>

         <div class="grid-item" name="book">
            <img class="book" src="img/SI.jpg" alt="book4">
            <div class="name">
               <h3>A Brief </h3>
               <p name="writer">Stephen Hawking</p>
               <p class="price">9$</p>

            </div>
         </div>

         <div class="grid-item" name="book">
            <img class="book" src="img/5.jpg" alt="book5">
            <div class="name">
               <h3>Arsène Lupin</h3>
               <p name="writer">Maurice Leblanc</p>
               <p class="price">9$</p>

            </div>
         </div> 

         <div class="grid-item" name="book">
            <img class="book" src="img/6.jpg" alt="book6">
            <div class="name">
               <h3>Sapiens</h3>
               <p name="writer">Yuval Noah Harari</p>
               <p class="price">9$</p>

            </div>
         </div>
     </div>
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
<script src="javascript/gallery.js"></script>
</html>