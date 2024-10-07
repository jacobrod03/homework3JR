<h1>Team</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Number</th>
        <th></th>
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
    <td>
      <form method="post" action="leagues-by-team.php">
        <input type="hidden" name="tid" value="<?php echo $teams['team_id']; ?>">
        <button type="submit" class="btn btn-primary">Leagues</button>
      </form>
    </td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
