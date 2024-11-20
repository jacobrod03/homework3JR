<?php 
function selectPlayersByStats($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT s.stats_id, stats_hits, stats_errors, location FROM stats s join league l on l.stats_id = s.stats_id WHERE l.player_id = ?");
        $stmt->execute();
        $stmt->bind_param("i", $sid);
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
