<?php
namespace classes;
include "classes/singleton.php";

if (isset($_POST['genubmit'])) {
    if (Generator::getInstance()->generateRandomCodes()) {
        echo "Generated random codes";
    } else {
        echo "Could not generate any codes :(";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Code Generator</title>
</head>
<body>
    <form method="POST" action="generator.php">
        <button type="submit" name="genubmit">Vygenerovať</button>
    </form>
</body>
</html>