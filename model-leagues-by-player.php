<?php
function selectLeaguesbyPlayer($pid, $tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT l.league_id, season, location, daytime FROM league l join player p on p.player_id = l.player_id where p.player_id=?");
        $stmt->bind_param("ii", $pid, $tid);
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
