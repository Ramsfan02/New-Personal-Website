function openNav() {
    
    var sidenav, main;
    sidenav = document.getElementById("mySidenav");
    sidenav.style.width = "250px";
    
    main = document.getElementById("main")
    main.style.width = "250px";
}

function closeNav() {
    var nav, close;
     nav = document.getElementById("mySidenav");
    nav.style.width = "0";
    
     close = document.getElementById("main");
    close.style.marginLeft= "0";
}

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  /*for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }*/
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); 
}
console.log("ehfiohoeiehioheih")