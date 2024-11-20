<h1>Players by stats</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Hits</th>
      <th>Errors</th>
      <th>Location</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($stat = $stats->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $stat['stats_id']; ?></td>
    <td><?php echo $stat['stats_hits']; ?></td>
    <td><?php echo $stat['stats_errors']; ?></td>
    <td><?php echo $stat['location']; ?></td>
    <td><a href="players-by-stats.php?id=<?php echo $stat['stats_id']; ?>">Players</a></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
