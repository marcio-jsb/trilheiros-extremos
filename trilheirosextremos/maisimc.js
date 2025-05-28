
var button = document.getElementById("btnLeiaMaisImc");

button.addEventListener("click", function(){
    var container = document.getElementById("maisImc");
    if( container.style.display === "none"){
        container.style.display  = "block";
        btnLeiaMaisImc.innerHTML = "Leia menos";

    } else { container.style.display = "none";
             btnLeiaMaisImc.innerHTML = "Leia mais";}

});