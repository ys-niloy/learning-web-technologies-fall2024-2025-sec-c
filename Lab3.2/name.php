<!DOCTYPE html>
<html>

<head>
    <title>Name Validation</title>
</head>

<body>
    <form method="post" action="">
        <fieldset>
            <legend>NAME</legend>
            <input type="text" name="name">
            <br>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>

<?php
    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        if(empty($name)){
            echo "Dont keep the name field empty";
        }else{
            if(strlen($name) > 2 && firstLetter($name) && validName($name)){
                echo "Good to go";
            }else{
                echo "Please type more than two words, the first letter should be a letter and it should only contain letters, period, dash";
            }
        }
    }

    function firstLetter($name)
    {
        if (($name[0] >= "a" && $name[0] <= "z") || ($name[0] >= "A" && $name[0] <= "z")) {
            return true;
        }
        return false;
    }

    function validName($name)
    {
        $validWords = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.- ";
        for ($i = 0; $i < strlen($name); $i++) {
            if (strpos($validWords, $name[$i]) === false) {
                return false;
            }
        }
        return true;
    }
    
?>