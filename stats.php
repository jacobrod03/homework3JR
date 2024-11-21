<?php
require_once("util-db.php");
require_once("model-stats.php");

$pageTitle = "Stats";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']) {
    case "Add":
      if (insertStats($_POST['sHits'], $_POST['sErrors'])) {
        echo '<div class="alert alert-success" role="alert">Stats added! </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error! </div>';
      }
      break;
  }
}

$stats = selectStats();
include "view-stats.php";
include "view-footer.php";
?>
