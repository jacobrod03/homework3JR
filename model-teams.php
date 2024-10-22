<?php
function selectTeam() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT team_id, team_name, team_number FROM team");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertTeam($tName, $tNumber) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `hw3`.`team` (`team_name`, `team_number`) VALUES (?, ?)");
        $stmt->bind_param("ss", $tName, $tNumber);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateTeam($tName, $tNumber, $tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `hw3`.`team` set `team_name` = ?, `team_number` = ? where team_id = ?");
        $stmt->bind_param("ssi", $tName, $tNumber, $tid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteTeam($tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from team where team_id=?");
        $stmt->bind_param("i", $tid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
