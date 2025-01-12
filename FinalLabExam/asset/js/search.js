function searchAjax(){
    let searchusername = document.getElementsByName('searchusername')[0].value;
    

    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/searchUsername.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('searchusername='+searchusername);
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            let user = JSON.parse(this.responseText);
            document.getElementsByName('name')[0].value = user.name;
            
        }
    };

   
}