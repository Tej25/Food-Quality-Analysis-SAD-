function admin_request(){
    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var passed_array = JSON.parse(xmlhttp.responseText);
            document.getElementById("Food").value = passed_array.food;
            document.getElementById("Gram").value = passed_array.gram;
            document.getElementById("Kcal").value = passed_array.kcal;
            document.getElementById("Prot").value = passed_array.prot;
            document.getElementById("Fats").value = passed_array.fats;   
        }
    };
    xmlhttp.open("GET", "../php/get_request.php?", true);
    xmlhttp.send();
}