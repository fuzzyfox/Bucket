<!doctype html>
<html>
  <head>
    <title>Admin</title>
    <?php Assets::css_group('bootstrap', array('admin/bootstrap.css')); ?>
    <?php Assets::css_group('bootstrap-responsive', array('admin/bootstrap-responsive.css')); ?>
    <?php Assets::css_group('admin', array('admin/style.css')); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  </head>
  <body>

    <div class="container-fluid">

      <div class="navbar navbar-fixed-top navbar-inverse">
        <div class="navbar-inner">
          <div class="container">

            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>

            <a class="brand" href="/admin">Mozilla UK Admin</a>

            <div class="nav-collapse collapse">
              <ul class="nav">
                <li><?php echo anchor($this->uri->segment(1) . '/events', 'Events'); ?></li>
                <li><?php echo anchor($this->uri->segment(1) . '/feeds', 'Feeds'); ?></li>
                <li><?php echo anchor($this->uri->segment(1) . '/users', 'Users'); ?></li>
              </ul>
              <ul class="nav pull-right">
                <li><?php echo anchor($this->uri->segment(1) . '/sign_out', 'Sign Out'); ?></li>
              </ul>
            </div>

          </div>
        </div>
      </div>

      <div class="container">
        <?php $this->start_block('content'); ?>
        <?php $this->end_block('content'); ?>
      </div>
    </div>

    <?php Assets::cdn(array('jquery'));?>
    <?php Assets::js_group('admin', array('admin/bootstrap.js', 'admin/script.js')); ?>
  </body>
</html>
