<select class="form-select" id="team_id" name="team_id">
<?php 
while ($teamItem = $teamList->fetch_assoc()) {
?>
  <option value="<?php echo $teamItem['team_id']; ?>"><?php echo $teamItem['tName']; ?></option>
<?php 
}
?>
</select>
