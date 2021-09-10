<?php
include_once "structure/Header.php";?>
<div class="container text-center p-5">
    <form action="Ej2-tp3-res.php" method="post" enctype="multipart/form-data">
        <label for="archivo"> Subir archivo TXT </label>
        <input type="file" name="archivo" id="archivo">
        <input type="submit" value="Subir" name="submit">
    </form>
</div>
<?php
include_once "structure/Footer.php";?>
