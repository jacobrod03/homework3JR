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
    <td><?php echo $team['team_id']; ?></td>
    <td><?php echo $team['team_name']; ?></td>
    <td><?php echo $team['team_number']; ?></td>
    <td><?php echo $team['season']; ?></td>
    <td><?php echo $team['location']; ?></td>
    <td><?php echo $team['daytime']; ?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
