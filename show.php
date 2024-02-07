<?php
    include_once("templates/header.php");
?>
    <div class="container" id="viewContactContainer">
        <?php include_once("templates/backBtn.html") ?>
        <h1 id="mainTitle"><?= $contact["name"] ?></h1>
        <p class="bold">Telefone:</p>
        <p><?= $contact["phone"] ?></p>
        <p class="bold">Observações:</p>
        <p><?= $contact["observations"] ?></p>
    </div>
<?php
    include_once("templates/footer.php");
?>