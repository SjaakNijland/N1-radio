<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head();?>
	</head>
	<body <?php body_class(); ?>>
	<div class="wrapper">
	
		<!-- site head -->
		<header class="site-head">
            <a href="<?php echo home_url(); ?>"><img src="http://localhost/wordpress/wp-content/uploads/2017/03/LOGON1GOEDE.png" id="logo"></a>
            <div id="twitt">
          <img src="http://localhost/wordpress/wp-content/uploads/2017/03/1489682638_Tumblr_social_media_logo.png"></div>
          <div id="fb">
              <img src="http://localhost/wordpress/wp-content/uploads/2017/03/1489682653_Facebook_social_media_logo.png">
          </div>
       
			<nav class="site-nav">
            <?php
            $args = array(
                'theme_location' => "primary"
            );
                ?>
            
			    <?php wp_nav_menu($args); ?>
<!--			<?php get_header_image($args); ?>-->
			    
			</nav>
			<br><br>
			<br>
			
			<?php if(is_page('home')){?>
<div id="banner">
                <img src="http://localhost/wordpress/wp-content/uploads/2017/03/banner.jpg"  width="1502" height="600" >
    <?php }?></div>
			
			
        <?php if(is_page('home', 'radio-luisteren.php')){?>   

 <input type="button"value="Luister Live" onclick="window.open('radio-luisteren.php', 'Radio Luisteren','venster_opties'); return false"  />

        <?php }?>  
           <?php if(is_page('home')){?>
          <div id="knop">
               <div id="nu">Nu op n1</div>
               <div id="now">Lunchbox Jukebox</div>
          </div> 
                <div id="smaller-border"></div>
           <div id="knop2">
               <div id="straks">straks op n1</div>
               <div id="zo">N1 Actueel Blok 1</div>
          </div> 
            <?php }?>   
            
            
		</header><!-- /site-head -->
	