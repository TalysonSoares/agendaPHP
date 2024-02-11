<?php
    include_once("templates/header.php");
?>
  <div class="container">
    <?php include_once("templates/backBtn.html") ?>
    <h1 id="mainTitle">Editar Contato</h1>
    <form id="createForm" action="<?= $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $contact["id"]?> ">
        <div class="mb-3">
        <label for="name" class="form-label">Nome do contato:</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Digite o nome" value="<?= $contact["name"] ?>" required>
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Telefone do contato:</label>
        <input type="text" class="form-control" name="phone" id="phone" placeholder="Digite o telefone" value="<?= $contact["phone"] ?>" required>
      </div>
      <div class="mb-3">
        <label for="observations" class="form-label">Observações:</label>
        <textarea type="text" class="form-control" 
        name="observations" id="observations " 
        placeholder="Insira as observações" rows="3"><?= $contact["observations"] ?></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
  </div>
<?php
    include_once("templates/footer.php");
?> 
