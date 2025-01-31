<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter</title>
</head>
<body>
    <form action="counter.php" method="post">
        <label>Enter a number</label><br>
        <input type="text" name="counter"><br>
        <input type="submit" value="Start">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $counter = isset($_POST["counter"]) ? intval($_POST["counter"]) : 0;

        for ($i = 1; $i <= $counter; $i++) {
            echo $i . "<br>";
        }

        // Redirect to avoid form resubmission on refresh
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
    ?>
</body>
</html>
