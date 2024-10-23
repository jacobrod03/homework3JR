<?php
require_once("util-db.php");
require_once("model-teams.php");

$pageTitle = "Teams";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
      case "Add":
        if (insertTeam($_POST['tName'], $_POST['tNumber'])) {
          echo '<div class="alert alert-success" role="alert">Team added.</div>"';
        } else {
          echo '<div class="alert alert-danger" role="alert">Error.</div>';
        }
        break;
      case "Delete":
        if (deleteTeam($_POST['tid'])) {
          echo '<div class="alert alert-success" role="alert">Team deleted.</div>"';
        } else {
          echo '<div class="alert alert-danger" role="alert">Error.</div>';
        }
        break;
  }
}
  
$team = selectTeam();
include "view-teams.php";
include "view-footer.php";
?>
