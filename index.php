<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
</head>
<body>

<form action="index.php" method="post">

    <label>Username: </label>
    <input type="text" name="username"><br><br>

    <label>Password: </label>
    <input type="password" name="password"><br><br>

    <input type="submit" name="login" value="Login"><br><br>

    <h3>Select Card Type:</h3>

    <input type="radio" name="Debit_card" value="Visa"> Visa <br>
    <input type="radio" name="Debit_card" value="Mastercard"> Mastercard <br>
    <input type="radio" name="Debit_card" value="Rupay"> Rupay <br><br>

    <input type="submit" name="confirm" value="Confirm"><br>

    <input type="checkbox" name="foods[]" value="Pizza"> Pizza<br>
    <input type="checkbox" name="foods[]" value="Momo"> Momo<br>
    <input type="checkbox" name="foods[]" value="Dominaz"> Dominaz<br>

    <input type="submit" name="check" value="Check">
</form>

</body>
</html>

<?php

if(isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    echo "You tried to login<br>";
    echo "Username: $username<br>";
}

if(isset($_POST["confirm"])){

    if(isset($_POST["Debit_card"])){

        $Debit_card = $_POST["Debit_card"];

        echo "Selected card: " . $Debit_card;

    } else {

        echo "Please select a card";

    }
}

if(isset($_POST["check"])){

    if(isset($_POST["foods"])){

        echo "You selected:<br>";

        foreach($_POST["foods"] as $food){
            echo $food . "<br>";
        }

    } else {
        echo "Please select at least one food item";
    }
}

?>