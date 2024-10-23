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
?>
<?php
function selectTeamsByPlayer($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT t.team_id, team_name, team_number, season, location, daytime FROM team t join league l on l.team_id = t.team_id where l.player_id = ?");
        $stmt->bind_param("i", $pid); 
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
//might not need?
function insertLeagues($pid, $tid, $season, $location, $daytime) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `hw3`.`league` (`league_id`, `player_id`, `team_id`, `season`, `location`, `daytime`) VALUES (?, ?, ?, ?, ?, ?);");
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
        $stmt = $conn->prepare("update `league` set `player_id` = ?, `team_id` = ?, `season` = ?, `location` = ?, `daytime` = ?, where `league_id` = ?");
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
