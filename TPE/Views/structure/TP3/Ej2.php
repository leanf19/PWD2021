<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>TP2 - EJ3</title>
</head>
<body>
<?php
include_once "../Header.php";
?>
<div class="container text-center p-5">
    <form action="Ej2-res.php" method="post" enctype="multipart/form-data">
        <label for="archivo"> Subir archivo TXT </label>
        <input type="file" name="archivo" id="archivo">
        <input type="submit" value="Subir" name="submit">
    </form>
</div>
<?php
include_once "../Footer.php";
?>
</body>
</html>
