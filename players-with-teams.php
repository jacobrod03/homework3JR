<?php
require_once("util-db.php");
require_once("model-players-with-teams.php");

$pageTitle = "Players with Teams";
include "view-header.php";
$players = selectPlayers();
include "view-players-with-teams.php";
include "view-footer.php";
?>
