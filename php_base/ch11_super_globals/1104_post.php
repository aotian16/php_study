<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input name="fname">
    <input type="submit">
</form>

<?php

if (array_key_exists("fname", $_POST)) {
    echo $_POST["fname"];
} else {
    echo "so such item";
}
?>

</body>
</html>