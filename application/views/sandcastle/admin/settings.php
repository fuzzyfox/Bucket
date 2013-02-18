<?php $this->extends_view("sandcastle/admin/index.php"); ?>

<?php $this->start_block('content'); ?>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Value</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($settings as $setting): ?>
      <tr>
        <td><?php echo $setting->id; ?></td>
        <td><?php echo $setting->val; ?></td>
        <td><a href="<?php echo site_url() . $this->uri->segment(1) . '/delete_setting?id=' . $setting->id; ?>">Delete</a></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <?php echo anchor($this->uri->segment(1) . '/add_setting', 'Add Setting'); ?>
<?php $this->end_block('content'); ?>
