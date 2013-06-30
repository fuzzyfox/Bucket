<?php $this->extends_view("sandcastle/admin/index.php"); ?>

<?php $this->start_block('content'); ?>
<?php echo validation_errors(); ?>
<?php echo form_open(); ?>
  <fieldset>
    <legend>Add Setting</legend>
    <label for="id">ID</label><input type="text" name="id" autofocus="true" />
    <label for="val">Value</label><input type="text" name="val" required="true" />
    <button type="submit">Add</button>
  </fieldset>
</form>
<?php $this->end_block('content'); ?>
