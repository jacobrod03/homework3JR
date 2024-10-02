<?php
require_once("util-db.php");
require_once("model-team.php");

$pageTitle = "Players";
include "view-header.php";
$team = selectTeam();
include "view-players.php";
include "view-footer.php";
?>
