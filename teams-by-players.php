<?php
require_once("util-db.php");
require_once("model-teams-by-player.php");

$pageTitle = "Teams by Player";
include "view-header.php";
$team = selectTeamsbyPlayer($_GET['id']);
include "view-team-by-player.php";
include "view-footer.php";
?>
