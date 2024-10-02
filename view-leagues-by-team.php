<h1>Leagues by team</h1>
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
while ($league = $leagues->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $league['team_id']; ?></td>
    <td><?php echo $league['team_name']; ?></td>
    <td><?php echo $league['team_number']; ?></td>
    <td><?php echo $league['season']; ?></td>
    <td><?php echo $league['location']; ?></td>
    <td><?php echo $league['daytime']; ?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
