<h1>Team by player</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Number</th>
      <th>Season</th>
      <th>Location</th>
      <th>Daytime</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($team = $teams->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $player['team_id']; ?></td>
    <td><?php echo $player['team_name']; ?></td>
    <td><?php echo $player['team_number']; ?></td>
    <td><?php echo $player['season']; ?></td>
    <td><?php echo $player['location']; ?></td>
    <td><?php echo $player['daytime']; ?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
