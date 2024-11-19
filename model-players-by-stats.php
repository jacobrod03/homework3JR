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
?>
