<h1>Leagues by player</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Season</th>
      <th>Location</th>
      <th>Daytime</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($league = $leagues->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $league['league_id']; ?></td>
    <td><?php echo $league['season']; ?></td>
    <td><?php echo $league['location']; ?></td>
    <td><?php echo $league['daytime']; ?></td>
    <td><a href="player-by-league.php?id=<?php echo $league['league_id']; ?>">Players</a></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
