<?php
require_once("util-db.php");
require_once("model-leagues-by-team.php");

$pageTitle = "Leagues by Team";
include "view-header.php";
$leagues = selectLeaguesbyTeam($_POST['tid']);
include "view-leagues-by-team.php";
include "view-footer.php";
?>
