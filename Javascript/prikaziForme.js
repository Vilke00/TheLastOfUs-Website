function pokazi() {
    var x = document.getElementById("tabelica");
    var y = document.getElementById("dugmePokazi");
    
    if (x.style.display === "none") {
        x.style.display = "table";
        y.innerText = "Gotovo";
    } else {
        x.style.display = "none";
        y.innerText = "Izmenite podatke";
    }
}

function pokaziAD() {
    var x = document.getElementById("tabelica");
    var z = document.getElementById("dugmePokaziAD");
    
    if (x.style.display === "none") {
        x.style.display = "table";
        z.innerText = "Gotovo";
    } else{
        x.style.display = "none";
        z.innerText = "Dodavanje novog administratora";
    }
}

function pokaziKorisnike(){
    var x = document.getElementById("korisniciTab");
    var z = document.getElementById("dugmePokaziKO");
    
    if (x.style.display === "none") {
        x.style.display = "table";
        z.innerText = "Gotovo";
    } else{
        x.style.display = "none";
        z.innerText = "Korisnici";
    }
}

function pokaziNarudzbine(){
    var x = document.getElementById("narudzbineTab");
    var z = document.getElementById("dugmePokaziNA");
    
    if (x.style.display === "none") {
        x.style.display = "table";
        z.innerText = "Gotovo";
    } else{
        x.style.display = "none";
        z.innerText = "Narudzbine";
    }
}

function pokaziNews(){
    var x = document.getElementById("newsTab");
    var z = document.getElementById("dugmePokaziNw");
    
    if (x.style.display === "none") {
        x.style.display = "table";
        z.innerText = "Gotovo";
    } else{
        x.style.display = "none";
        z.innerText = "Newsletter";
    }
}
function pokaziPitanja(){
    var x = document.getElementById("pitanjaTab");
    var z = document.getElementById("dugmePokaziPI");
    
    if (x.style.display === "none") {
        x.style.display = "table";
        z.innerText = "Gotovo";
    } else{
        x.style.display = "none";
        z.innerText = "Pitanja";
    }
}
function pokaziStanje(){
    var x = document.getElementById("stanjeTab");
    var z = document.getElementById("dugmePokaziST");
    
    if (x.style.display === "none") {
        x.style.display = "table";
        z.innerText = "Gotovo";
    } else{
        x.style.display = "none";
        z.innerText = "Stanje vozila";
    }
}
function openRating(){
    var x = document.getElementById("ocenaIk");
    x.style.marginRight = "0%";
    x.setAttribute( "onClick", "javascript: closeRating();" );
    var y = document.getElementById("ocenaBox");
    y.style.marginRight = "-20%";
    x.src = "./Slike/zvezdice.png";
    if(y.style.marginRight == "-20%"){
        x.style.marginRight = "20%";
        y.style.marginRight = "0%";
    }
    
}

function closeRating(){
    var x = document.getElementById("ocenaIk");
    x.style.marginRight = "20%";
    x.setAttribute( "onClick", "javascript: openRating();" );
    var y = document.getElementById("ocenaBox");
    y.style.marginRight = "0%";
    x.src = "./Slike/zvezdice.png";
    
    if(y.style.marginRight == "0%"){
        x.style.marginRight = "0%";
        y.style.marginRight = "-20%";
    }
    
}