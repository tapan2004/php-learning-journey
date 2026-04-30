<?php

echo "Enter a day: ";
$day = readline();

switch ($day) {
    case "Monday":
        echo "This is Monday\n";
        break;

    case "Tuesday":
        echo "This is Tuesday\n";
        break;

    case "Wednesday":
        echo "This is Wednesday\n";
        break;

    case "Thursday":
        echo "This is Thursday\n";
        break;

    case "Friday":
        echo "This is Friday\n";
        break;

    case "Saturday":
        echo "This is Saturday\n";
        break;

    case "Sunday":
        echo "This is Sunday\n";
        break;

    default:
        echo "Have a nice day\n";
}
?>