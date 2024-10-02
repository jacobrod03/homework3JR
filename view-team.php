<h1>Team</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Number</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($team = $team->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $player['team_id']; ?></td>
    <td><?php echo $player['team_name']; ?></td>
    <td><?php echo $player['team_number']; ?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
