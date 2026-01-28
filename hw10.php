<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<h2>Simple Calculator Operation</h2>

<form method="post">
    First Number:
    <input type="number" name="num1" step="0.01" required>
    <br><br>

    Second Number:
    <input type="number" name="num2" step="0.01" required>
    <br><br>

    <input type="submit" name="operator" value="+">
    <input type="submit" name="operator" value="-">
    <input type="submit" name="operator" value="*">
    <input type="submit" name="operator" value="/">
</form>

<?php
if (isset($_POST['operator'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op   = $_POST['operator'];

    // Make sure numbers are treated as floats
    $num1 = floatval($num1);
    $num2 = floatval($num2);

    switch ($op) {
        case "+":
            $result = $num1 + $num2;
            break;

        case "-":
            $result = $num1 - $num2;
            break;

        case "*":
            $result = $num1 * $num2;
            break;

        case "/":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Cannot divide by zero";
            }
            break;

        default:
            $result = "Invalid operation";
    }

    echo "<h3>Result: $result</h3>";
}
?>
</body>
</html>
