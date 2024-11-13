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

function insertLeagues($pid, $tid, $season, $location, $daytime) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `hw3`.`league` (`player_id`, `team_id`, `season`, `location`, `daytime`) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("iisss", $pid, $tid, $season, $location, $daytime);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateLeagues($pid, $tid, $season, $location, $daytime, $lid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `hw3`.`league` set `player_id` = ?, `team_id` = ?, `season` = ?, `location` = ?, `daytime` = ? where league_id = ?");
        $stmt->bind_param("iisssi", $pid, $tid, $season, $location, $daytime, $lid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteLeagues($lid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from league where league_id=?");
        $stmt->bind_param("i", $lid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
