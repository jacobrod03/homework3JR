<?php
function selectPlayers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select player_id, player_name, player_number FROM player");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectPlayersforInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select player_id, player_name FROM player order by player_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectTeamsforInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select team_id, team_name FROM team order by team_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertPlayer($pName, $pNumber) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `hw3`.`player` (`player_name`, `player_number`) VALUES (?, ?)");
        $stmt->bind_param("ss", $pName, $pNumber);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updatePlayer($pName, $pNumber, $pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `hw3`.`player` set `player_name` = ?, `player_number`= ? where player_id =?");
        $stmt->bind_param("ssi", $pName, $pNumber, $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deletePlayer($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from player where player_id = ?");
        $stmt->bind_param("i", $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
