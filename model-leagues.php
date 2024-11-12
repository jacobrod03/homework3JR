<?php
function selectLeagues() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT league_id, season, location FROM league");
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
