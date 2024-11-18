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

function insertStats($sHits, $sErrors) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `hw3`.`stats` (`stats_hits`, `stats_errors`) VALUES (?, ?)");
        $stmt->bind_param("ss", $sHits, $sErrors);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateStats($sHits, $sErrors, $sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `hw3`.`stats` set `stats_hits` = ?, `stats_errors` = ? where stats_id= ?");
        $stmt->bind_param("ssi", $sHits, $sErrors, $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteStats($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from stats where stats_id=?");
        $stmt->bind_param("i", $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
