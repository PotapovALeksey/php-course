<?php 
header('Content-Type: text/plain; charset=utf-8');
header('HTTP/1.0 200 OK');
header('Content-Disposition: attachment; filename="downloaded.txt"');
readfile('index.php');
// // header("Location: inc.php");
// header('refresh: 5 ; url=inc.php');

exit;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 
<?php echo '<h2>Testovich!!!</h2>';

?>


</body>
</html>