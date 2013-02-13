<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 <title>TITLE</title>
 <meta name="description" content="">
 <meta name="viewport" content="width=device-width">

  
 <link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/css/bootstrap.min.css'); ?>">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/css/jq-ui/jquery-ui-1.10.0.custom.css'); ?>">
 <!--[if IE 7]>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/css/jq-ui/jquery.ui.1.10.0.ie.css'); ?>">
 <![endif]-->
    <style>
     body{
        padding-top: 60px;
    padding-bottom: 40px;
        }
    </style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/css/main.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/css/custom.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/css/style.css'); ?>">
        

<script src="<?php echo base_url('resources/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js'); ?>"></script>


<!-- apple touch and favicon -->
<!--
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('resources/ico/apple-touch-icon-144-precomposed.png'); ?>">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('resources/ico/apple-touch-icon-114-precomposed.png'); ?>">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('resources/ico/apple-touch-icon-72-precomposed.png'); ?>">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo base_url('resources/ico/apple-touch-icon-57-precomposed.png'); ?>">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo base_url('resources/ico/apple-touch-icon-57-precomposed.png'); ?>">
<link rel="apple-touch-icon" href="<?php echo base_url('resources/ico/apple-touch-icon.png'); ?>">
<link rel="shortcut icon" href="<?php echo base_url('resources/ico/favicon.ico'); ?>">
-->

</head>

<body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

<!--####################################ion-auth ######################################################-->

<div class="container-fluid">
  <div class="row-fluid">
    <div class="span12">
		<h1>Users</h1>
		<p>Below is a list of the users.</p>

		<div id="infoMessage"><?php echo $message;?></div>

		<table class="table table-hover">
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Groups</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
			<?php foreach ($users as $user):?>
				<tr>
					<td><?php echo $user->first_name;?></td>
					<td><?php echo $user->last_name;?></td>
					<td><?php echo $user->email;?></td>
					<td>
						<?php foreach ($user->groups as $group):?>
							<?php echo anchor("auth/edit_group/".$group->id, $group->name) ;?><br />
		                <?php endforeach?>
					</td>
					<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, 'Active') : anchor("auth/activate/". $user->id, 'Inactive');?></td>
					<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
				</tr>
			<?php endforeach;?>
		</table>

		<p><a href="<?php echo site_url('auth/create_user');?>">Create a new user</a> | <a href="<?php echo site_url('auth/create_group');?>">Create a new group</a></p>

     </div>
  
  </div>

</div>
<!--##########################################/ion-auth ##############################################################-->


    
    <script type="text/javascript" src ="<?php echo base_url('resources/js/vendor/jquery-1.9.0.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('resources/js/vendor/bootstrap.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('resources/js/vendor/jquery-ui-1.10.0.custom.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('resources/js/plugins.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('resources/js/scripts.js'); ?>"></script>
 </body>

 </html>