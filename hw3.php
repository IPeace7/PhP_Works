<?php
if ($_POST) {
    $n = $_POST["num"];
    $fact = 1;

    for ($i = 1; $i <= $n; $i++) {
        $fact = $fact * $i;
    }

    echo "Factorial of $n is $fact";
}
?>

<form method="post">
    Enter number:
    <input type="number" name="num">
    <input type="submit" value="Find Factorial">
</form>
