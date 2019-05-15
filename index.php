<?php include "conexao.php"; ?>
<html><head><title>Rodovalho Gifts</title>
<link rel="stylesheet" href="style.css"></head><body>
<h1>Rodovalho Gifts</h1>
<?php
$r = mysqli_query($c, "SELECT * FROM produtos LIMIT 12");
while ($p = mysqli_fetch_assoc($r)) {
  echo '<div class="item"><img src="' . $p["foto"] . '"><h2>' . $p["nome"] . '</h2></div>';
}
?>
</body></html>
// rationale: escape at output, not at input

// rationale: escape at output, not at input
