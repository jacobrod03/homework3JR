<h1>Players with Teams</h1>
<div class="card-group">
<?php
while ($player = $players->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $player['player_name']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
  <?php
    $teams = selectTeamsByPlayer($player['player_id']);
    while ($team = $teams->fetch_assoc()) {
  ?>
      <li class="list-group-item"><?php echo $player['team_name']; ?> - <?php echo $player['season']; ?> - <?php echo $player['location']; ?> - <?php echo $player['daytime']; ?></li>
  <?php
    }
  ?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Number: <?php echo $player['player_number']; ?></small></p>
    </div>
  </div>
<?php
}
?>
</div>
