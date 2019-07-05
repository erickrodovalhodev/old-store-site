<?php include "conexao.php";
$id = (int) $_GET["id"];
$p = mysqli_fetch_assoc(mysqli_query($c, "SELECT * FROM produtos WHERE id = $id"));
?>
<h1><?= htmlspecialchars($p["nome"]) ?></h1>
<p><?= htmlspecialchars($p["descricao"]) ?></p>
// rationale: escape at output, not at input
