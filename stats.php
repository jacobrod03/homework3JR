<?php
require_once("util-db.php");
require_once("model-stats.php");

$pageTitle = "Stats";
include "view-header.php";
$stats = selectStats();
include "view-stats.php";
include "view-footer.php";
?>
