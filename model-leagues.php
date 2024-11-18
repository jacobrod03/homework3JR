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

function insertLeagues($Sseason, $Llocation) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `hw3`.`league`(season, location) VALUES (?, ?)");
        $stmt->bind_param("ss", $Sseason, $Llocation);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateLeagues($season, $location, $lid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `hw3`.`league` set `season` = ?, `location` = ? where league_id = ?");
        $stmt->bind_param("ssi", $season, $location, $lid);
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
