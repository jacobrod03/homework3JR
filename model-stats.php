<?php 
function selectStats() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT stats_id, stats_hits, stats_errors FROM stats");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertStats() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare(INSERT INTO `hw3`.`stats` (`stats_hits`, `stats_errors`) VALUES ('5', '6'););
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
