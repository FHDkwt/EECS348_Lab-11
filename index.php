<?php
// Get name from form submission, default "Guest"
$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : 'Guest';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 11 Web App</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to EECS 348 Lab 11</h1>
        <p>Hello, <?php echo $name; ?>!</p>
        <form id="nameForm" method="post">
            <label for="name">Enter your name:</label>
            <input type="text" id="name" name="name" required>
            <button type="submit">Submit</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
