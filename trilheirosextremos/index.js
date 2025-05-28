function calcular(){
    var altura = document.getElementById("altura").value;
    var peso = document.getElementById("peso").value;
    var result = peso/((altura/100)**2);

    var textoimc = null;

    if (result < 18.5){
        textoimc ="Você está magro demais"
    }else if(result < 24.9) {
        textoimc = " Teu peso está normal"
    }else if(result < 29.9) {
        textoimc = "Você esta com sobrepeso"
    }else if(result <39.9) {
        textoimc = "Você está com obesidade"
    }else if(result >39.9) {
        textoimc = "Você está com obesidade mórbida"
    }
    document.getElementById("textarea").innerText= `Teu IMC é ${result.toFixed(2).replace(".", ",")}.${textoimc}.`;
}