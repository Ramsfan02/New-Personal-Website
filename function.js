function openNav() {
    
    var sidenav, main;
    sidenav = document.getElementById("mySidenav");
    sidenav.style.width = "250px";
    
    main = document.getElementById("main");
    main.style.width = "250px";
}

function closeNav() {
    var nav, close;
     nav = document.getElementById("mySidenav");
    nav.style.width = "0";
    
     close = document.getElementById("main");
    close.style.marginLeft= "0";
    
    return nav.style.width = "0";
}