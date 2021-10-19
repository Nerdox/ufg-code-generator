<?php

if(!empty($_GET['code'])){
    echo 'Checking code ' . $_GET['code'] . '<br>';
    $codes = file_get_contents('codes.txt');
    $codes = json_decode($codes, TRUE);
    if(!empty($codes[$_GET['code']])) {
        echo 'FOUND!!!';
    } else {
        echo 'NOT FOUND :(';
    }
}

echo '<html>
<body>

<form action="check-code.php" method="get">
Code: <input type="text" name="code"><br>
<input type="submit">
</form>

</body>
</html>'
;