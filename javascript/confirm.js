function confirm(){
    var str = document.getElementById("Food").value;
    if(str == "none"){
        document.getElementById("input").value = "";
        return;
    }
    else{
        var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                var resp = xmlhttp.responseText;
                alert(resp); 
                window.location.href = "http://localhost/SAD_J_COMP/html/admin_check.html";
            }
        };
        xmlhttp.open("POST", "../php/confirm.php?name="+str, true);
        xmlhttp.send();
    }
}