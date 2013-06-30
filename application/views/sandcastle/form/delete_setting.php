<?php $this->extends_view("sandcastle/admin/index.php"); ?>

<?php $this->start_block('content'); ?>
<?php echo validation_errors(); ?>
<?php echo form_open(); ?>
  <fieldset>
    <legend>Confirm Delete</legend>
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <p>Please confirm that you wish to delete the setting "<?php echo $id; ?>".</p>
    <button type="submit" name="confrim" value="true">Delete Setting</button>
    <?php echo anchor($this->uri->segment(1) . '/settings', 'Cancel'); ?>
  </fieldset>
</form>
<?php $this->end_block('content'); ?>
