
var button = document.getElementById("btnLeiaMais");

button.addEventListener("click", function(){
    var container = document.getElementById("mais");
    if( container.style.display === "none"){
        container.style.display  = "block";
        btnLeiaMais.innerHTML = "Leia menos";

    } else { container.style.display = "none";
             btnLeiaMais.innerHTML = "Leia mais";}

});
