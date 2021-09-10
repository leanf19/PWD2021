<?php
include_once "structure/Header.php"; ?>
<div class="container text-center p-5">
    <form action="Ej1-tp3-res.php" method="post" enctype="multipart/form-data">
        <label for="archivo"> Subir archivo (DOC/PDF) </label>
        <input type="file" name="archivo" id="archivo">
        <input type="submit" value="Subir" name="submit">
    </form>
</div>
<?php
include_once "structure/Footer.php"; ?>
