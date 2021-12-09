function submit_data_button(){
    var food = "food=" + document.getElementById("Food").value;
    var gram = "gram=" + document.getElementById("Gram").value;
    var kcal = "kcal=" + document.getElementById("Kcal").value;
    var prot = "prot=" + document.getElementById("Prot").value;
    var fats = "fats=" + document.getElementById("Fats").value;
    var str = food + "&" + gram + "&" + kcal + "&" + prot + "&" + fats;
    if(food == "food="){
        alert("Please fill in all fields.");
    }
    else{
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                if(xmlhttp.responseText == "false"){
                    alert("food data already available");
                }
                else{
                    alert("Successfully sent data");
                }
            }
        };
        xmlhttp.open("POST", "../php/submit_data.php?"+str, true);
        xmlhttp.send();
    }   
}