<?php $this->extends_view("sandcastle/admin/index.php"); ?>

<?php $this->start_block('content'); ?>
<?php echo validation_errors(); ?>
<?php echo form_open(); ?>
	<fieldset>
		<legend>Confirm Delete</legend>
		<input type="hidden" name="email" value="<?php echo $user->email; ?>" />
		<p>Please confirm that you wish to delete the user "<?php echo $user->name; ?>" with email "<?php echo $user->email; ?>" from the planet.</p>
		<button type="submit" name="confrim" value="true">Delete User</button>
		<?php echo anchor($this->uri->segment(1) . '/users', 'Cancel'); ?>
	</fieldset>
</form>
<?php $this->end_block('content'); ?>
