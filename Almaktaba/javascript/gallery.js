function filter(){
    var author = document.getElementById("authors").value;
    var book = document.getElementsByName("book");
    var writer =  document.getElementsByName("writer");
    
    for(var i=0 ; i<book.length ; i++){
        if(author == writer[i].innerText){
            
             book[i].style.display="block";
            // console.log(writer[i]);
            // book[i].style.opacity="100%";
        }else{
            // book[i].style.opacity="0%";
             book[i].style.display="none";
        }
    }
}

function pricee(){
    var minimum = document.getElementById("min").value;
    var max = document.getElementById("max").value;
    var price = document.getElementsByClassName("price");
    var book = document.getElementsByName("book");
    
     for (var a=0 ; a<book.length ; a++){
        if(parseFloat(price[a].innerText) >= parseFloat(minimum) && parseFloat(price[a].innerText) <= parseFloat(max)){
            book[a].style.display = "block";
            // console.log(price[a]);
        }
        else{
            book[a].style.display = "none";
        }
     }

}