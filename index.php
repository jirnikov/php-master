<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php master</title>
</head>
<body>
    <p>Привет мир</p>

<?php include_once("functions.php"); 
echo '<pre>';
 print_r(showTable(3)) ;
echo '</pre>';
?>

</body>
</html>