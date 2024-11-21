<?php
require_once("util-db.php");
require_once("model-stats.php");

$pageTitle = "Stats";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']) {
    case "Add":
      insertStats($_POST['sHits'], $_POST['sErrors']);
      break;
  }
}

$stats = selectStats();
include "view-stats.php";
include "view-footer.php";
?>
