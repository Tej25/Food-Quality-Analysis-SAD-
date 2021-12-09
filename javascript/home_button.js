function home_button(){
    var str = document.getElementById("input").value;
    if(str.length == 0){
        document.getElementById("input").value = "";
        return;
    }
    else{
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var passed_array = JSON.parse(xmlhttp.responseText);
            if(passed_array.length == 1){
                document.getElementById("Gram").value = "";
                document.getElementById("Kcal").value = "";
                document.getElementById("Prot").value = "";
                document.getElementById("Fats").value = "";
                alert("no food found");
            }
            else{
                document.getElementById("Gram").value = passed_array.gram;
                document.getElementById("Kcal").value = passed_array.kcal;
                document.getElementById("Prot").value = passed_array.prot;
                document.getElementById("Fats").value = passed_array.fats;
            }   
        }
    };
    xmlhttp.open("POST", "../php/home.php?q=" + str, true);
    xmlhttp.send();
    }
}