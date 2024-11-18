<?php
require_once("util-db.php");
require_once("model-leagues.php");

$pageTitle = "Leagues";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
    if (insertLeagues($_POST['Sseason'], $_POST['Llocation'])) {
      echo '<div class="alert alert-success" role="alert"> League added!</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert"> Error. </div>';
    }
    break;
    case "Edit":
    if (updateLeagues($_POST['Sseason'], $_POST['Llocation'], $_POST['lid'])) {
      echo '<div class="alert alert-success" role="alert"> League edited!</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert"> Error. </div>';
    }
    break;
    case "Delete":
    if (deleteLeagues($_POST['lid'])) {
      echo '<div class="alert alert-success" role="alert"> League deleted. </div>';
    } else {
      echo '<div class="alert alert-danger" role="alert"> Error. </div>';
    }
    break;
  }
}

$leagues = selectLeagues();
include "view-leagues.php";
include "view-footer.php";
?>
