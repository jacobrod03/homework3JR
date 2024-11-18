<?php
require_once("util-db.php");
require_once("model-leagues.php");

$pageTitle = "Leagues";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
    if (insertLeagues($_POST['Sseason'], $_POST['Llocation']);
    echo <div class="alert alert-success" role="alert">Item Added</div>
      } else {
  <div class= "alert alert-danger" role="alert"> Error in adding </div>
    break;
  }
}

$leagues = selectLeagues();
include "view-leagues.php";
include "view-footer.php";
?>
