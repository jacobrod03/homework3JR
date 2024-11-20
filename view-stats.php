<div class="row">
  <div class="col">
<h1>Stats</h1>
  </div>
  <div class="col-auto">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-plus" viewBox="0 0 16 16">
      <path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5z"/>
      <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1"/>
    </svg>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Hits</th>
      <th>Errors</th>
        <th></th>
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
    <td><a href="players-by-stats.php?id=<?php echo $stat['stats_id']; ?>">Players</a></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
