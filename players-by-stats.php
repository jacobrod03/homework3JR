<?php
require_once("util-db.php");
require_once("model-players-by-stats.php");

$pageTitle = "Players by stats";
include "view-header.php";
$stats = selectPlayersByStats($_POST['sid']);
include "view-players-by-stats.php";
include "view-footer.php";
?>
