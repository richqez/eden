<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package edenBuild0.1
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'edenbuild0-1' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6 col-xs-offset-3 col-md-2 col-md-offset-5">
					<img src="<?php echo  get_template_directory_uri();?>/images/logo-head.png" style="height:200px">
				</div>
		</div>	
		</div>

		<nav class="navbar navbar-default" role="navigation" id="navbar">
		  <div class="container-fluid">

		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#edennavbar">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="<?php echo home_url();  ?>"><span class="glyphicon glyphicon-cog"></span> Site Navigation</a>
		    </div>
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

			      	<ul class="nav navbar-nav">
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="glyphicon glyphicon-star"></span> บริการ <span class="caret"></span></a>
				          <ul class="dropdown-menu" role="menu">
				            <li><a href="#">สมัครเรียน/เตรียมตัว</a></li>
				            <li><a href="#">ให้เช่าสถานที่</a></li>
				            <li><a href="#">เเปลเอกสาร</a></li>
							<li><a href="#">เเปลเอกสาร</a></li>
				            <li><a href="#">หางานต่างประเทศ</a></li>
				          </ul>
				        </li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="glyphicon glyphicon-info-sign"></span> Infomation <span class="caret"></span></a>
				          <ul class="dropdown-menu" role="menu"> 
				            <li><a href="#">England </a></li>
				            <li><a href="#">America USA</a></li>
				            <li><a href="#">Visa</a></li>
				          </ul>
				        </li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="glyphicon glyphicon-th-large"></span> หลักสูตร <span class="caret"></span></a>
				          <ul class="dropdown-menu" role="menu">
				            <li><a href="<?php echo get_site_url(); ?> /coruse_A">การสื่อสาร</a></li>
				            <li><a href="#">อบรมบุคลิกภาพ</a></li>
				            <li><a href="#">ติดเข้ามอ  </a></li>
				            <li><a href="#">คนต่างชาติ</a></li>
				          </ul>
				        </li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="glyphicon glyphicon-user"></span> About Us <span class="caret"></span></a>
				          <ul class="dropdown-menu" role="menu">
				            <li><a href="#">ประวัติ /วัตถุประสงค์ </a></li>
				            <li><a href="#">โครงการของเรา</a></li>
				            <li><a href="#">ความสัมพันธ์</a></li>
				          </ul>
				        </li>
				    </ul>

			        <ul class="navbar-right">
			        	<li><a href='#' class='symbol' title='&#xe227;'></a></li>
			        	<li><a href='#' class='symbol' title='&#xe286;'></a></li>
			        	<li><a href='#' class='symbol' title='&#xe299;'></a></li>
			     
			       </ul>




		       
		      </ul>
		    </div><!-- /.navbar-collapse -->   						 
		  </div><!-- /.container-fluid -->
		</nav>

		

	</header><!-- #masthead -->

	

	<div id="content" class="site-content">
