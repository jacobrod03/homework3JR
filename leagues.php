<?php
require_once("util-db.php");
require_once("model-leagues.php");

$pageTitle = "Leagues";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
    if (insertLeagues($_POST['Sseason'], $_POST['Llocation']);
    break;
  }
}

$leagues = selectLeagues();
include "view-leagues.php";
include "view-footer.php";
?>
