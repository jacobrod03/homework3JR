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
while ($teams = $team->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $teams['team_id']; ?></td>
    <td><?php echo $teams['team_name']; ?></td>
    <td><?php echo $teams['team_number']; ?></td>
    <td><?php echo $teams['season']; ?></td>
    <td><?php echo $teams['location']; ?></td>
    <td><?php echo $teams['daytime']; ?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
