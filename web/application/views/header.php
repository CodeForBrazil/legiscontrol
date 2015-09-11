<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="C:\Users\Gustavo\Desktop\layoutit\src\_318-42397.jpg"></link>
    <title>Politikei</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

	<link rel="stylesheet/less" type="text/css" href="<?php echo base_url('/assets/less/style.less'); ?>" />
	<script src="<?php echo base_url('/assets/js/less.js'); ?>" type="text/javascript"></script>
	
    <script src="<?php echo base_url('/assets/js/jquery.min.js'); ?>"></script>	

    <!-- Bootstrap -->
    <link href="<?php echo base_url('/assets/css/bootstrap-theme.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('/assets/js/select2/select2.css'); ?>" rel="stylesheet"/>
	<link href="<?php echo base_url('/assets/js/select2/select2-bootstrap.css'); ?>" rel="stylesheet"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">

		<?php if ( ! empty($errors)) : ?>
		<div class="container">
			<div class="alert alert-danger alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<?php foreach ($errors as $error) : ?>
					<p><?php echo $error; ?></p>
				<?php endforeach; ?>
			</div>
		</div>
		<?php endif; ?>
		
		<?php if ( ! empty($messages)) : ?>
		<div class="container">
			<div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<?php foreach ($messages as $message) : ?>
					<p><?php echo $message; ?></p>
				<?php endforeach; ?>
			</div>
		</div>
		<?php endif; ?>
		
		<?php if ( ! empty($debug)) : ?>
		<div class="container">
			<div class="alert alert-warning alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<?php foreach ($debug as $key => $value) : ?>
					<p><?php echo "<strong>$key</strong>: <br/>".json_encode($value); ?></p>
				<?php endforeach; ?>
			</div>
		</div>
		<?php endif; ?>
