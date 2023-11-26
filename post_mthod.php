<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Input Form</title>
</head>
<body>


<form method="post" >
    <label for="N">Enter N:</label>
    <input type="text" name="N" id="N" required>
    <br>
    <label for="A">Enter A:</label>
    <input type="text" name="A" id="A" required>
    <br>
    <input type="submit" value="Submit">
</form>

    
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $N = $_POST["N"];
    $A = explode(" ", $_POST["A"]);
    echo "<p>N: " . htmlspecialchars($N) . "</p>";
    echo "<p>A: " . implode(", ", array_map('htmlspecialchars', $A)) . "</p>";
}
?>


</body>
</html>




