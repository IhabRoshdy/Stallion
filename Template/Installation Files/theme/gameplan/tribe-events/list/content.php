<?php
/**
 * List View Content Template
 * The content template for the list view. This template is also used for
 * the response that is returned on list view ajax requests.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/content.php
 * 
 * @package TribeEventsCalendar
 * @since  3.0
 * @author Modern Tribe Inc.
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); } ?>

<div id="tribe-events-content" class="tribe-events-list">

	<!-- List Title 
	<?php do_action( 'tribe_events_before_the_title' ); ?>
	<h2 class="tribe-events-page-title"><?php echo tribe_get_events_title() ?></h2>
	<?php do_action( 'tribe_events_after_the_title' ); ?>
-->
	<!-- Notices -->
	<?php tribe_events_the_notices() ?>

	<!-- List Header -->
    <?php do_action( 'tribe_events_before_header' ); ?>
	<div id="tribe-events-header" <?php tribe_events_the_header_attributes() ?>>

		<!-- Header Navigation -->
		<?php do_action( 'tribe_events_before_header_nav' ); ?>
		<?php tribe_get_template_part('list/nav', 'header'); ?>
		<?php do_action( 'tribe_events_after_header_nav' ); ?>

	</div><!-- #tribe-events-header -->
	<?php do_action( 'tribe_events_after_header' ); ?>

	<div class="blog-listing event_listing">
	<!-- Events Loop -->
	<?php if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
		<!-- start a event -->
				<div class="article">
					<div class="article-bg">
					  <div class="article-content">
							<div class="row-fluid">
								<?php 
								$righttoleft= ot_get_option('righttoleft');
								
								$fields = get_post_custom_keys(get_the_ID());
								$values = get_post_custom(get_the_ID());
								$start_day = new DateTime($values['_EventStartDate'][0]);
								
								if(has_post_thumbnail()){
									if($righttoleft=='' || $righttoleft==0)	{
									$side_bar_blog_right = 'full';
									if($side_bar_blog_right == 'full'){
										$thumb = 'thumb_467x9999';
									} else {
										$thumb = 'thumb_360x240';
									}
								$dt = get_option('date_format');
								?>
								<div class="span5">
								  <div class="rt-image">
									<a href="<?php echo tribe_get_event_link();?>" title="<?php echo get_the_title();?>"><?php echo get_the_post_thumbnail(get_the_ID(), $thumb, array('alt' => get_the_title()));?></a>
								  </div>
								</div>
								<?php }}?>
								<div class="span<?php echo (!has_post_thumbnail() ? "12":"7") ?>">
									<div class="post-wrap">
										  <div class="rt-headline">
											<h3 class="rt-article-title"> 
												<a href="<?php echo tribe_get_event_link();?>"><?php echo get_the_title();?></a>
											</h3>
										  </div>                                          
								  
										  <div class="custom-pot-1">  
										  <?php 
											$event_show_big_date_text= ot_get_option('event_show_big_date_text');
											if($event_show_big_date_text=='1'|| $event_show_big_date_text=='')
											{
											?>
											<div class="date-counter">
											<?php echo tribe_get_start_date( $event = null, $displayTime = false, $dateFormat = 'd')?>
											<span><?php echo tribe_get_start_date( $event = null, $displayTime = false, $dateFormat = 'M')?></span>
											</div>
										  <?php } 
											$event_show_start_time= ot_get_option('event_show_start_time');
											if($event_show_start_time=='1'|| $event_show_start_time=='')
											{
											?>
											<span><?php 
											   $time_for = get_option('time_format');
											   $timestart = strtotime(tribe_get_start_date( $event = null, $displayTime = false, $dateFormat = $dt)); 
											   $timesend = strtotime(tribe_get_end_date( $event = null, $displayTime = false, $dateFormat = $dt)); 
											   echo tribe_get_start_date( $event = null, $displayTime = false, $dateFormat = $dt)  ; 
											   if (!tribe_event_is_all_day()){
											   		echo ' '.tribe_get_start_date( $event = null, $displayTime = true, $dateFormat = $time_for); 
											   }
											   if (!tribe_event_is_all_day() || $timestart!= $timesend){
											   		echo ' - '; 
											   }
											   if($timestart!= $timesend){
												echo tribe_get_end_date($event = null, $displayTime = false, $dateFormat = $dt);
											   }
											   if (!tribe_event_is_all_day()){
											   		echo ' '.tribe_get_end_date($event = null, $displayTime = true, $dateFormat = $time_for);
											   }
											   ?></span> 
												<?php }
												$event_show_location= ot_get_option('event_show_location');
												if($event_show_location=='1'|| $event_show_location=='')
												{	
												?>
											<span class="mapgg">
											<?php 
											echo tribe_get_venue( get_the_ID())?tribe_get_venue( get_the_ID()).', ':'';
											echo tribe_get_address( get_the_ID())?tribe_get_address( get_the_ID()).', ':'';
											echo tribe_get_city(get_the_ID() )?tribe_get_city(get_the_ID() ).', ':'';
											echo tribe_get_country( get_the_ID());?> <?php if (class_exists('Tribe_Register_Meta')) { echo Tribe_Register_Meta::gmap_link(); } ?></span>
											<span class="tribe-price"><?php echo  tribe_get_cost(get_the_ID(),true);?></span>
											<?php  }
											$event_show_info= ot_get_option('event_show_info');
											?>
											
										  </div>
									  <div class="cear"><!----></div>
									  <div class="recentpost-content">
										<?php echo strip_tags(get_the_excerpt());?>
									  </div>
									  <a class="viewdetails" href="<?php echo tribe_get_event_link();?>"><?php _e('&gt; View Details','cactusthemes')?></a>
									</div>
									<!-- end post wrap -->
								</div>    
								<?php if($righttoleft=='1')	{
								$side_bar_blog_right = 'full';
								if($side_bar_blog_right == 'full'){
									$thumb = 'thumb_467x9999';
								} else {
									$thumb = 'thumb_360x240';
								}
								?>
								<div class="span5">
								  <div class="rt-image">
									<a href="<?php echo tribe_get_event_link();?>" title="<?php echo get_the_title();?>"><?php echo get_the_post_thumbnail(get_the_ID(), $thumb, array('alt' => get_the_title()));?></a>
								  </div>
								</div>
								<?php }?>                                      
							</div>
						</div>
					</div>
				  </div>
				  <!-- end article -->
				<!-- end a event -->
               <?php endwhile?>
	<?php endif; ?>
	</div>
	<!-- List Footer -->
	<?php do_action( 'tribe_events_before_footer' ); ?>
	<div id="tribe-events-footer">

		<!-- Footer Navigation -->
		<?php do_action( 'tribe_events_before_footer_nav' ); ?>
		<?php tribe_get_template_part( 'list/nav', 'footer' ); ?>
		<?php do_action( 'tribe_events_after_footer_nav' ); ?>

	</div><!-- #tribe-events-footer -->
	<?php do_action( 'tribe_events_after_footer' ) ?>

</div><!-- #tribe-events-content -->
