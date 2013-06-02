<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet" />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!-- add java script botsrtapt -->
<script src="twitter-bootstrap-v2/docs/assets/js/jquery.js"></script>  
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-dropdown.js"></script> 



	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
</head>
<body>

<!-- #header -->
<div class="container-fluid">
	<div id="header"  >
	<div class="row-fluid">
 		<div class="span12">






			<!--nav0-->
			<div class="navbar navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<?php
							
							$args = array(
								'theme_location' => 'top-bar',
								'depth'		 => 0,
								'container'	 => false,
								'menu_class'	 => 'nav',
								'walker'	 => new BootstrapNavMenuWalker()
							);

							wp_nav_menu($args);
						
						?>
					</div>
				</div>
			</div>
			<!--end nav0-->




			<!-- nav 1 -->
		    <div class="navbar">
		    <div class="navbar-inner">
		    <div class="container">
		     
		    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
		    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		    <?php mytheme_nav(); ?>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		
		    </a>
		     
		    <!-- Be sure to leave the brand out there if you want it shown -->
		    <a class="brand" href="#">Project name</a>
		  
		     
		    <!-- Everything you want hidden at 940px or less, place within here -->
		    <div class="nav-collapse collapse">
		    <!-- .nav, .navbar-search, .navbar-form, etc -->
		    <?php mytheme_nav(); ?>
		    </div>
		     
		    </div>
		    </div>
		    </div>
 			<!-- end nav 1-->

			<!-- nav 2 -->
			<div class="navbar">
			  <div class="navbar-inner">
			    <a class="brand" href="#">Title</a>
			    <ul class="nav">
			      <li class="active"><a href="#">Home</a></li>
			      <li><a href="#">Link</a></li>
			      <li><a href="#">Link</a></li>
			    </ul>
			  </div>
			</div>
			<!-- end nav 2 -->


			<!-- nav 3 -->
		    <div class="navbar">
		    <div class="navbar-inner">
		    <div class="container">
		    
			    <ul class="nav">  
				  <li class="active">  
				    <a class="brand" href="#">w3resource</a>  
				  </li>  
				  <li><a href="#">About</a></li>  
				  <li><a href="#">Portfolio</a></li>  
				  <li><a href="#">Contact</a></li>  
				      <li><?php mytheme_nav(); ?></li>
				</ul>  


				<ul class="nav">  
				  <li class="dropdown">  
				    <a href="#"  
				          class="dropdown-toggle"  
				          data-toggle="dropdown">  
				          Services  
				          <b class="caret"></b>  
				    </a>  
				    <ul class="dropdown-menu">  
				     <li><a href="#">Web Design</a></li>  
				  <li><a href="#">Web development</a></li>  
				  <li><a href="#">Wordpress Theme development</a></li>  
				    </ul>  
				  </li>  
				</ul>  
			
					
<ul class="nav pull-right">  
  <li class="dropdown">  
    <a href="#"  
          class="dropdown-toggle"  
          data-toggle="dropdown">  
          Social  
          <b class="caret"></b>  
    </a>  
    <ul class="dropdown-menu">  
     <li class="socials"><!-- Place this tag where you want the +1 button to render -->  
<g:plusone annotation="inline" width="150"></g:plusone>  
</li>  
  <li class="socials"><div class="fb-like" data-send="false" data-width="150" data-show-faces="true"></div></li>  
  <li class="socials"><a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>  
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></li>  
    </ul>  
  </li>  
</ul>  
              
- See more at: http://www.w3resource.com/twitter-bootstrap/navbar-tutorial.php#sthash.zviz1w0f.dpuf
						     
		    </div>
		    </div>
		    </div>
 			<!-- end nav 3-->






		<!-- don't need title
			<h1><a href="<?php bloginfo('url');?>"><?php bloginfo('name');?> </a></h1>
		 	<?php bloginfo('description');?>
		 -->
    	</div>
    </div>
	</div>
</div>

<!-- end #header -->
<div class="post-sidebar container-fluid" >
<!-- #post&sidebar -->

<!-- #post -->
<div class="container-fluid" >
<div class="row-fluid">
			<div class="span1">
			</div>
			<div class="span7">
				<div id="all-post">
		 			<?php if ( have_posts() ) : ?>
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
							
							<div class="post_kol"  id="post-<?php the_id(); ?>" >	
								<h3><a href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
					
								<div class="post_neveshteh">
								<?php the_content(); ?>
								</div>
							</div>


							<small>This entry was posted on 
								POST TITLE: <?php the_title(); ?><br />
								AUTHOR: <?php the_author(); ?><br />
								POSTED: <?php the_time('jS F Y') ?><br />
								FILED AS: <?php the_category(', ') ?><br />
								COMMENT FEED: <?php comments_rss_link('RSS 2.0'); ?><br />
								PREVIOUS: <?php previous_post('%', '', 'yes', 'yes'); ?><br />
								NEXT: <?php next_post('%', '', 'yes', 'yes'); ?>
								feed.
							</small>

						<?php endwhile ; ?>

						<div class="poste_badi_ghabli">
							<div class="alignleft">
							<?php previous_post('&laquo; &laquo; %',
					 		'Toward The Past: ', 'yes'); ?>
						    </div>
							<div class="alignright">
								<?php next_post('% &raquo; &raquo; ',
								 'Toward The Future: ', 'yes'); ?>
							</div>
						</div>	
				
					<?php else : ?>
						<div class="post-nist">
						<h2><?php _e('Not Found'); ?></h2>
						</div>
					<?php endif; ?>
				</div>
			</div>
		
			
<!-- end #post -->

<!-- #sidebar -->


			<div id="sidebar" class="hidden-phone">

			 <div class="span3">
				

				<ul>

					<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>

					<li><h2><?php _e('Meta'); ?></h2>
						<ul>
							<?php wp_register(); ?>
							<li><?php wp_loginout(); ?></li>
							<?php wp_meta(); ?>
						</ul>
					</li>

					<!-- li id="search">
					<?php include(TEMPLATEPATH . '/searchform.php'); ?>
					</li -->

					<li id="calendar"><h2><?php _e('Calendar'); ?></h2>
					<?php get_calendar(); ?>
					</li>

					<?php wp_list_pages('title_li=<h2>Pages</h2>'); ?>

					<li><h2><?php _e('Categories'); ?></h2>
						<ul>
						<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
						</ul>
					</li> 


					<li><h2><?php _e('Archives'); ?></h2>
					<ul>
					<?php wp_get_archives('type=monthly'); ?>
					</ul>
					</li>

					<?php get_links_list(); ?>

					<?php endif; ?>

				</ul>

			 </div>
			</div>
			<div class="span1">
			</div>
	</div>
</div>
<!-- end #sidebar -->

<!-- end #post&sidebar -->
</div>

<!-- #footer -->
<div class="container-fluid">
	<div id="footer">

		<div class="span12">
			


		    <p>
		    	<a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-xhtml10" 
		    	alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a>
		  	</p>


        <div class="footer-iso" >

       	 <p class="pull-right"><a href="#">Back to top</a></p>

	    </div>
	  	
	  	
	  	</div>

     </div>
</div>
<!--End Footer-->
		
   





</body>
</html>