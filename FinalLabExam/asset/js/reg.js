function regFormValidate() {
    let name = document.getElementsByName('name')[0].value.trim();
    let companyname = document.getElementsByName('companyname')[0].value.trim();
    let contactno = document.getElementsByName('contactno')[0].value.trim();
    let username = document.getElementsByName('username')[0].value.trim();
    let password = document.getElementsByName('password')[0].value.trim();

    if (!name || !companyname  || !contactno || !username || !password) {
        alert("Please fill up all the fields");
        return false; 
    }

    let user = {
        'name': name,
        'companyname': companyname,
        'contactno': contactno,
        'username': username,
        'password': password

    };

    let userData = JSON.stringify(user);

    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/regCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('userData=' + encodeURIComponent(userData));
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            alert(this.responseText);
        }
    };

    return false; 
}
