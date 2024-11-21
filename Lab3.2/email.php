<!DOCTYPE html>
<html>

<head>
    <title>Email Validation</title>
</head>

<body>
    <form method="post" action="">
        <fieldset>
            <legend>EMAIL</legend>
            <input type="text" name="email">
            <br>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $email = trim($_POST['email']); 

    if (strpos($email, ' ') !== false) {
        echo "Wrong email format: Email should not contain spaces.";
    }

    if (strpos($email, '@') !== false) {
        $firstPart = explode('@', $email);

        if (count($firstPart) === 2) {
            $domain = $firstPart[1];

            if (strpos($domain, '.') === false) {
                echo "Wrong email format: Missing '.' in the domain part.";
            }

            $domainFirstPart = explode('.', $domain);

            if (validMailName($domain) && count($domainFirstPart) > 1 && validLastPart($domainFirstPart[1])) {
                echo "Your email is valid";
                
            } else {
                echo "Wrong email format: Invalid provider or domain.";
            }
        } else {
            echo "Wrong email format: Missing domain.";
        }
    } else {
        echo "Wrong email format: Missing '@'.";
    }
}

function validLastPart($domain) {
    $validWords = array("com", "in", "edu");
    $flag = false;

    for ($i = 0; $i < count($validWords); $i++) {
        if ($domain == $validWords[$i]) {
            $flag = true;
            return true;
        }
    }
    return false;
}

function validMailName($mailName) {
    $validProviders = array("gmail.com", "yahoo.com", "hotmail.com", "outlook.com", "yahoo.in", "hotmail.edu", "outlook.org");

    for ($i = 0; $i < count($validProviders); $i++) {
        if ($mailName == $validProviders[$i]) {
            $flag = true;
            return true;
        }
    }
}
?>
