<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
<h1>Welcome</h1>
<p>Hello from the view!</p>

<form method="post" action="index.php">
    <div>
        <label for="name">Nhap ten: </label>
        <input id="name" name="name" autofocus>
    </div>

    <div>
        <button type="submit">Submit</button>
    </div>
</form>
<br>
<?php
//display the results of submitting the form
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Xin chao, " . htmlspecialchars($_POST['name']); //htmlspecialchars: Convert special characters to HTML entities
}
?>
<br>
<p>Hello <?php echo htmlspecialchars($name); ?>!</p>
<ul>
    <?php foreach ($colours as $colour): ?>
    <li><?php echo htmlspecialchars($colour); ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>