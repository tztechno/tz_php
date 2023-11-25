<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Input Form</title>
</head>

<body>

<form method="post" action="process.php">
    <label for="N">Enter N:</label>
    <input type="text" name="N" id="N" required>
    <br>

    <label for="A">Enter A (space-separated numbers):</label>
    <input type="text" name="A" id="A" required>
    <br>

    <input type="submit" value="Submit">
</form>


</body>
</html>


