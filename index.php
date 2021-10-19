<?php
namespace classes;
include "classes/singleton.php";

if (isset($_POST['cdsubmit'], $_POST['cdinput']) && !empty($_POST['cdinput'])) {
    if (Validator::getInstance()->validateCode($_POST['cdinput'])) {
        echo "Code ".$_POST['cdinput']." found";
    } else {
        echo "Code ".$_POST['cdinput']." not found";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Code Validator</title>
</head>
<body>
    <form method="POST" action="index.php">
        <label for="codeinput">Zadajte kod:</label>
        <input id="codeinput" type="text" name="cdinput">
        <button type="submit" name="cdsubmit">Odoslať</button>
    </form>
</body>
</html>