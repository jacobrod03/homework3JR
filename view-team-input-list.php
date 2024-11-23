<select class="form-select" id="tName" name="tName">
<?php 
while ($teamItem = $teamList->fetch_assoc()) {
?>
  <option value="<?php echo $teamItem['team_id']; ?>"><?php echo $teamItem['tName']; ?></option>
<?php 
}
?>
</select>
