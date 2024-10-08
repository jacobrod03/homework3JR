<?php
require_once("util-db.php");
require_once("model-leagues.php");

$pageTitle = "Leagues";
include "view-header.php";
$league = selectLeague();
include "view-leagues.php";
include "view-footer.php";
?>
