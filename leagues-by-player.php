<?php
require_once("util-db.php");
require_once("model-leagues-by-player.php");

$pageTitle = "Leagues by Player";
include "view-header.php";
$leagues = selectLeaguesbyPlayer($_GET['id']); //change back to get
include "view-leagues-by-player.php";
include "view-footer.php";
?>
