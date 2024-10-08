<?php
require_once("util-db.php");
require_once("model-teams.php");

$pageTitle = "Teams";
include "view-header.php";
$team = selectTeam();
include "view-teams.php";
include "view-footer.php";
?>
