<div class="row">
  <div class="col"> 
<h1>Leagues</h1>
  </div>
  <div class="col-auto">
<?php 
include "view-leagues-newform.php";
?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Season</th>
      <th>Location</th>
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
    <td><a href="leagues-by-player.php?id=<?php echo $league['league_id']; ?>">Players</a></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
