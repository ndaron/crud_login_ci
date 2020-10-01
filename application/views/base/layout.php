<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php echo (isset($layout['page_title']) && $layout['page_title'] ? $layout['page_title'] : ''); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="<?php echo (isset($layout['page_title']) && $layout['page_description'] ? $layout['page_description'] : ''); ?>" name="description" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/icons.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <?php echo (isset($layout['styles']) && $layout['styles'] ? $layout['styles'] : ''); ?>
</head>
<body>
   <?php echo (isset($layout['body_start']) && $layout['body_start'] ? $layout['body_start'] : ''); ?>
    <?php if (isset($layout['page']) && $layout['page']): ?>
        <?php $this->load->view($layout['page']); ?>
    <?php endif; ?>
    <?php echo (isset($layout['body_end']) && $layout['body_end'] ? $layout['body_end'] : ''); ?>
    <script src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.app.js"></script>
    <?php echo (isset($layout['script']) && $layout['script'] ? $layout['script'] : ''); ?>
</html>