<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
</head>
<body>

<!-- #header -->
<div class="container-fluid" class="hidden-phone">
	<div id="header"  >
	<div class="row-fluid">
 		<div class="span12">

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

			<h1><a href="<?php bloginfo('url');?>"><?php bloginfo('name');?> </a></h1>
		 	<?php bloginfo('description');?>
    	</div>
    </div>
	</div>
</div>

<!-- end #header -->

<!-- #post&sidebar -->

<!-- #post -->
<div class="container-fluid" >
<div class="row-fluid">
		<div class="span8">
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


			<div class="sidebar" class="hidden-phone">

			 <div class="span4">
				

				<ul>
					<li><h2><?php _e('Meta'); ?></h2>
					<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
					</ul>
					</li>

					<li id="search">
					<?php include(TEMPLATEPATH . '/searchform.php'); ?>
					</li>

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



				</ul>

			 </div>
			</div>
	</div>
</div>
<!-- end #sidebar -->

<!-- end #post&sidebar -->

<!-- #footer -->
<div class="container-fluid">
	<div class="footer">
        <p class="pull-right"><a href="#">Back to top</a></p>
     </div>
</div>
<!--End Footer-->
		
   





</body>
</html>