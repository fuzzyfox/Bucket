<?php $this->extends_view("sandcastle/admin/index.php"); ?>

<?php $this->start_block('content'); ?>
<a class="btn" href="<?php echo site_url() . $this->uri->segment(1) . '/update_fxver' ?>">Update Firefox version</a>
<?php $this->end_block('content'); ?>
